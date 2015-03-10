<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
Schema::create('Purchase', function($newTable){	

			$newtable->increments('id');
            $newTable->string('custname');
            $newTable->string('custemail');
            $newTable->string('tel_num');
            $newTable->string('prodId');
            $newTable->string('prodname');
            $newTable->string('prodname');
            $newTable->string('stockunit');
            $newTable->string('status');
			$newTable->string('category');
			$newTable->string('price');
			
		});


		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()

	{
		schema::drop('purchase');
	}

}
