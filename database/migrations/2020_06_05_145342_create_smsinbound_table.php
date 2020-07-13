<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
			$table->integer('smsinboundid', true);
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
