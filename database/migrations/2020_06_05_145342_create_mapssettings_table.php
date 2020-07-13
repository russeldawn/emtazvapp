<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapssettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mapssettings', function(Blueprint $table)
		{
			$table->integer('settingid')->primary('PK_mapssettings');
			$table->string('mapname');
			$table->string('settings');
			$table->string('value')->nullable();
			$table->boolean('isdefault')->nullable();
			$table->boolean('isselected')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mapssettings');
	}

}
