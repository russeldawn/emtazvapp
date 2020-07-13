<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
			$table->string('landuse')->nullable();
			$table->string('propose')->nullable();
			$table->string('condition')->nullable();
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
