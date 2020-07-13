<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsoutboundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('smsoutbound', function(Blueprint $table)
		{
			$table->bigInteger('outboundid', true);
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
		Schema::drop('smsoutbound');
	}

}
