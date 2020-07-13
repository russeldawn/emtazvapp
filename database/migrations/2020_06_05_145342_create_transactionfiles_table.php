<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactionfiles', function(Blueprint $table)
		{
			$table->bigInteger('td_id', true);
			$table->integer('transaction_id')->nullable();
			$table->text('filename')->nullable();
			$table->string('filelabel')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactionfiles');
	}

}
