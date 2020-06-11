<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmslogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('smslogs', function(Blueprint $table)
		{
			$table->integer('smslogid', true);
			$table->string('sent_num')->nullable();
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
		Schema::drop('smslogs');
	}

}
