<?php


// public routes
Route::get('/', 'PublicController@index')->name('index.home');
Route::get('about-us', 'PublicController@aboutUs')->name('about.us');
Route::get('careers', 'PublicController@careers')->name('careers');
Route::get('blogs', 'PublicController@blogs')->name('blogs');
Route::get('blog/{slug}', 'PublicController@blogDetails')->name('blog.detail');
Route::get('videos', 'PublicController@videos')->name('videos');
Route::get('our-pillars/climate-change', 'PublicController@climateChange')->name('climate.change');
Route::get('contact-us', 'PublicController@contactUs')->name('contact.us');
Route::post('contact-us/create', 'PublicController@contactUsCreate')->name('contact.create');
Route::get('our-pillars/economic-empowerment', 'PublicController@economicEmpowerment')->name('economic.empowerment');
Route::get('our-pillars/education', 'PublicController@education')->name('education');
Route::get('our-pillars/innovation-technology', 'PublicController@innovationTechnology')->name('innovation.technology');
Route::get('our-pillars/leadership-governance', 'PublicController@leadershipGovernance')->name('leadership.governance');
// Route::get('our-pillars', 'PublicController@ourPillars')->name('our.pillars');
Route::get('what-we-do', 'PublicController@whatWeDo')->name('we.do');
Route::get('what-we-do/{slug}', 'PublicController@whatWeDoSector')->name('we.do.sector');
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

    // What We Do
    Route::delete('what-we-dos/destroy', 'WhatWeDoController@massDestroy')->name('what-we-dos.massDestroy');
    Route::post('what-we-dos/media', 'WhatWeDoController@storeMedia')->name('what-we-dos.storeMedia');
    Route::post('what-we-dos/ckmedia', 'WhatWeDoController@storeCKEditorImages')->name('what-we-dos.storeCKEditorImages');
    Route::resource('what-we-dos', 'WhatWeDoController');

    // Career
    Route::delete('careers/destroy', 'CareerController@massDestroy')->name('careers.massDestroy');
    Route::post('careers/media', 'CareerController@storeMedia')->name('careers.storeMedia');
    Route::post('careers/ckmedia', 'CareerController@storeCKEditorImages')->name('careers.storeCKEditorImages');
    Route::resource('careers', 'CareerController');

    // Blog
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::post('blogs/media', 'BlogController@storeMedia')->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', 'BlogController@storeCKEditorImages')->name('blogs.storeCKEditorImages');
    Route::resource('blogs', 'BlogController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SliderController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SliderController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SliderController');

    // Team
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::post('teams/media', 'TeamController@storeMedia')->name('teams.storeMedia');
    Route::post('teams/ckmedia', 'TeamController@storeCKEditorImages')->name('teams.storeCKEditorImages');
    Route::resource('teams', 'TeamController');
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
