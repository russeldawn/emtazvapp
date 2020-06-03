<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanduseclassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('landuseclass', function(Blueprint $table)
		{
			$table->bigInteger('landuse_id', true);
			$table->string('landuse');
			$table->string('propose');
			$table->string('condition');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('landuseclass');
	}

}
