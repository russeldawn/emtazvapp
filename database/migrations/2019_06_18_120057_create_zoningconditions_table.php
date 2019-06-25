<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZoningconditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zoningconditions', function(Blueprint $table)
		{
			$table->bigIncrements('id')->primary('pk_zoningconditions');
			$table->string('allowableproject')->nullable();
			$table->string('class')->nullable();
			$table->string('section')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zoningconditions');
	}

}
