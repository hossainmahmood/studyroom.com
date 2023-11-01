<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('address')->nullable();
            $table->string('sex');
            $table->date('dob');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('status')->nullable();
            $table->string('department')->nullable();
            $table->string('level')->nullable();
            $table->string('class')->nullable();            
            $table->date('admissiondate')->nullable();           
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
        Schema::dropIfExists('students');
    }
}
