<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjecttypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projecttype', function (Blueprint $table) {
            $table->bigIncrements('projecttypeid');
			$table->unsignedBigInteger('projectname');
			$table->string('projecttype');
			$table->foreign('projectname')->references('id')->on('land_use');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projecttype');
    }
}
