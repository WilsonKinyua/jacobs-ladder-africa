<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatWeDosTable extends Migration
{
    public function up()
    {
        Schema::create('what_we_dos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->longText('description');
            $table->longText('slug')->nullable();
            $table->longText('meta_descriptions')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
