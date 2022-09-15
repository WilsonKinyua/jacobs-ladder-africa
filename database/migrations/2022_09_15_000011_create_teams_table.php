<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('title');
            $table->longText('intro_caption');
            $table->longText('user_bio');
            $table->longText('twitter_url')->nullable();
            $table->longText('linkedin_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
