<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapdbfinfohistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mapdbfinfohistory', function(Blueprint $table)
		{
			$table->string('name');
			$table->string('newpin');
			$table->string('class');
			$table->date('pindate');
			$table->time('pintime');
			$table->float('newarea', 10, 0)->nullable();
			$table->integer('id')->nullable();
			$table->float('newlongitude', 10, 0)->nullable();
			$table->float('newlatitude', 10, 0)->nullable();
			$table->float('newperimeter', 10, 0)->nullable();
			$table->float('newhectares', 10, 0)->nullable();
			$table->integer('shapeid')->nullable();
			$table->string('details')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mapdbfinfohistory');
	}

}
