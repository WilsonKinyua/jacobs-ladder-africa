<?php


// public routes
Route::get('/', 'PublicController@index')->name('index.home');
Route::get('about-us', 'PublicController@aboutUs')->name('about.us');
Route::get('our-pillars/climate-change', 'PublicController@climateChange')->name('climate.change');
Route::get('contact-us', 'PublicController@contactUs')->name('contact.us');
Route::post('contact-us/create', 'PublicController@contactUsCreate')->name('contact.create');
Route::get('our-pillars/economic-empowerment', 'PublicController@economicEmpowerment')->name('economic.empowerment');
Route::get('our-pillars/education', 'PublicController@education')->name('education');
Route::get('our-pillars/innovation-technology', 'PublicController@innovationTechnology')->name('innovation.technology');
Route::get('our-pillars/leadership-governance', 'PublicController@leadershipGovernance')->name('leadership.governance');
Route::get('our-pillars', 'PublicController@ourPillars')->name('our.pillars');
Route::get('team', 'PublicController@team')->name('team');
Route::get('join-the-movement-and-be-a-member', 'PublicController@registerNow')->name('register.now');
Route::post('register-now/create', 'PublicController@registerNowCreate')->name('register.create');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Registered Users
    Route::delete('registered-users/destroy', 'RegisteredUsersController@massDestroy')->name('registered-users.massDestroy');
    Route::resource('registered-users', 'RegisteredUsersController');

    // Contact Us
    Route::delete('contactuses/destroy', 'ContactUsController@massDestroy')->name('contactuses.massDestroy');
    Route::post('contactuses/media', 'ContactUsController@storeMedia')->name('contactuses.storeMedia');
    Route::post('contactuses/ckmedia', 'ContactUsController@storeCKEditorImages')->name('contactuses.storeCKEditorImages');
    Route::resource('contactuses', 'ContactUsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
