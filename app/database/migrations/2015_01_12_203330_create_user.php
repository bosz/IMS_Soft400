<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($newTable){
			$newTable->increments('id');
			$newTable->string('first_name');
			$newTable->string('last_name');
			$newTable->string('email')->unique();
			$newTable->string('password', 128);
			$newTable->string('remember_token', 100);
			$newTable->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
