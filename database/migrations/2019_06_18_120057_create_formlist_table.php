<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formlist', function(Blueprint $table)
		{
			$table->integer('formid')->default(0)->primary('PK_formlist');
			$table->string('formtitle')->nullable();
			$table->string('formbuttonname')->nullable();
			$table->integer('formorder')->nullable()->default(0);
			$table->boolean('isvisible')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('formlist');
	}

}
