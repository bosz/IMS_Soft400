<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Payment', function($newTable){	
            $newTable->string('customerName');
            $newTable->string('customerEmail');
            $newTable->string('productName');
			$newTable->integer('purchaseDate');
			$newTable->integer('PaymentDate');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
