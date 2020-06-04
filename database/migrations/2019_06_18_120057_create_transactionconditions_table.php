<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionconditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactionconditions', function(Blueprint $table)
		{
			$table->bigInteger('transaction_id');
			$table->string('conditionusage');
			$table->integer('conditionid');
			$table->primary(['transaction_id','conditionusage','conditionid'], 'PK_transactionconditions');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactionconditions');
	}

}
