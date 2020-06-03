<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmsinboundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('smsinbound', function(Blueprint $table)
		{
			$table->bigIncrements('smsinboundid', true);
			$table->string('cell_num')->nullable();
			$table->text('message')->nullable();
			$table->time('datetime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('smsinbound');
	}

}
