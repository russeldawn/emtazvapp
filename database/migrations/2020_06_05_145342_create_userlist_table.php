<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userlist', function(Blueprint $table)
		{
			$table->id();
			$table->string('userpassword');
			$table->string('username');
			$table->boolean('isactive')->nullable()->default(1);
			$table->boolean('isadmin')->nullable()->default(1);
			$table->datetimetz('datemodified')->nullable();
			$table->string('userid')->unique();
			$table->boolean('canreview')->nullable()->default(0);
			$table->boolean('canapprove')->nullable()->default(0);
			$table->string('userposition')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userlist');
	}

}
