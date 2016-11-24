<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 20);
            $table->string('status', 20);
            $table->text('address');
            $table->string('mother_name', 20);
            $table->string('father_name',20);
            $table->string('profile', 100);
            $table->string('dob', 20);
            $table->text('pob');
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
        Schema::drop('students');
    }
}
