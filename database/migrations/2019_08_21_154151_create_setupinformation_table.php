<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setupinformation', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('value');
			$table->unsignedBigInteger('usage');
			// $table->integer('ordering')->nullable();
			$table->foreign('usage')->references('id')->on('setup_information_usage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setupinformation');
    }
}
