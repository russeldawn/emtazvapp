<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionremarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactionremarks', function(Blueprint $table)
		{
			$table->bigInteger('transactionid');
			$table->bigInteger('remarksid', true);
			$table->text('remarks')->nullable();
			$table->date('remarksdate')->nullable();
			$table->time('remarkstime')->nullable();
			$table->primary(['transactionid','remarksid'], 'pk_transactionremarks');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactionremarks');
	}

}
