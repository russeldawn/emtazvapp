<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserinformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userinformation', function(Blueprint $table)
		{
			$table->bigIncrements('userid', true);
			$table->string('username')->nullable();
			$table->string('password');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('middlename');
			$table->string('emailaddress')->unique();
			$table->string('typeofuser')->nullable();
			$table->smallInteger('isverify')->nullable()->default(0);
			$table->string('verificationcode')->nullable();
			$table->string('cellphone')->unique()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userinformation');
	}

}
