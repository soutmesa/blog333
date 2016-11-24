<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 100)->unique();
            $table->string('phone',20);
            $table->string('status', 10);
            $table->text('address');
            $table->string('profile', 100);
            $table->string('dob', 30);
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
        Schema::drop('staffs');
    }
}
// name
// email
// phone
// status
// address
// profile
// dob
// pob
