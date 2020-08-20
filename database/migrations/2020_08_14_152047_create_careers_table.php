<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('message')->nullable();
            $table->text('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('careers');
    }
}
