<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseractivitylogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('useractivitylogs', function(Blueprint $table)
		{
			$table->integer('useractivityid', true);
			$table->text('activity')->nullable();
			$table->time('datetime')->nullable();
			$table->integer('userid')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('useractivitylogs');
	}

}
