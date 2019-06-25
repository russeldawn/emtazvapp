<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVarianceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('variance', function(Blueprint $table)
		{
			$table->bigInteger('variance_id', true);
			$table->date('date_of_filing')->nullable();
			$table->string('owner_name')->nullable();
			$table->string('landline_no')->nullable();
			$table->string('mobile_no')->nullable();
			$table->string('email_address')->nullable();
			$table->string('first_application')->nullable();
			$table->integer('number_employees')->nullable();
			$table->string('annual_revenue')->nullable();
			$table->string('capital_investment')->nullable();
			$table->bigInteger('transaction_id')->nullable();
			$table->string('transaction_code')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('variance');
	}

}
