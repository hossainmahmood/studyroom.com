<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {

            $table->increments('id');

            $table->string('fullname');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('sex');
            $table->date('dob');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('status')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->date('joindate')->nullable();
            $table->date('retirement')->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
