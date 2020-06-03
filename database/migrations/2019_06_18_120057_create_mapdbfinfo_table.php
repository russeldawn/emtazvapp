<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapdbfinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mapdbfinfo', function(Blueprint $table)
		{
			$table->integer('shapeid');
			$table->bigIncrements('id');
			$table->string('name')->nullable();
			$table->float('longitudei', 10, 0)->nullable();
			$table->float('latitudei', 10, 0)->nullable();
			$table->float('lengthi', 10, 0)->nullable();
			$table->float('area', 10, 0)->nullable();
			$table->float('perimeter', 10, 0)->nullable();
			$table->float('hectares', 10, 0)->nullable();
			$table->string('class')->nullable();
			$table->string('oldname')->nullable();
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
		Schema::drop('mapdbfinfo');
	}

}
