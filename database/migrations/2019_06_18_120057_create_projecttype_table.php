<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjecttypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projecttype', function(Blueprint $table)
		{
			$table->bigIncrements('projecttypeid', true);
			$table->string('projectname')->nullable();
			$table->string('projecttype')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projecttype');
	}

}
