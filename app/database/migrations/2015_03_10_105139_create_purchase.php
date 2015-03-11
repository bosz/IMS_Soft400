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
            $newTable->string('customerName');
            $newTable->string('customerEmail');
            $newTable->string('productName');
			$newTable->string('category');
			$newTable->string('brand');
			$newTable->string('modalNum');
			$newTable->string('stock');
			$newTable->string('price');
			$newTable->integer('purchaseDate');
			$newTable->integer('initialPaymentDate');
			$newTable->integer('lastPaymentDate');
			$newTable->string('BillingMethod');
			$newTable->integer('TransactionCode');
			$newTable->string('TransactionMessage');
			$newTable->string('status');
			$newTable->timestamps();
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
