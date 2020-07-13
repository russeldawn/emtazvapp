<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetupinformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setupinformation', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('value')->nullable();
			$table->string('usage');
			$table->integer('ordering')->nullable();
			$table->primary(['id','usage'], 'PK_setupinformation');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('setupinformation');
	}

}
