<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('country')->nullable();
            $table->string('town')->nullable();
            $table->string('type')->nullable();
            $table->string('job_category')->nullable();
            $table->decimal('salary_range', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
