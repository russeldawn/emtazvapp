<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialapplicantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialapplicant', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('firstname')->nullable();
			$table->string('middlename')->nullable();
			$table->string('lastname')->nullable();
			$table->integer('applicanttype')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specialapplicant');
	}

}
