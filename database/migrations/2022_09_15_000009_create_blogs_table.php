<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->longText('description');
            $table->longText('seo_keywords')->nullable();
            $table->string('category_name');
            $table->longText('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
