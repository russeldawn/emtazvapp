<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaction', function(Blueprint $table)
		{
			$table->bigInteger('transactionid', true);
			$table->date('dateapplied')->nullable();
			$table->integer('applicantid')->nullable();
			$table->string('compliance')->nullable();
			$table->string('companyname')->nullable();
			$table->string('authorizedrep')->nullable();
			$table->text('address')->nullable();
			$table->integer('barangayid')->nullable();
			$table->string('natureofproject')->nullable();
			$table->text('locofarea')->nullable();
			$table->string('rightoverland')->nullable();
			$table->string('pinnum')->nullable();
			$table->string('proposelanduse')->nullable();
			$table->string('currentactivity')->nullable();
			$table->text('projectcost')->nullable();
			$table->string('locationclearance')->nullable();
			$table->string('endorserid')->nullable();
			$table->string('endorsementstatus')->nullable();
			$table->string('approverstatus')->nullable();
			$table->string('approverid')->nullable();
			$table->string('status')->nullable();
			$table->text('remarks')->nullable();
			$table->integer('projecttypeid')->nullable();
			$table->string('projecttenure')->nullable();
			$table->float('areaofproject', 10, 0)->nullable();
			$table->string('crop')->nullable();
			$table->string('decisionrelease')->nullable();
			$table->boolean('deputized')->nullable();
			$table->string('noticeissuer')->nullable();
			$table->date('noticedate')->nullable();
			$table->boolean('similarapplication')->nullable();
			$table->string('otherapplicationlocation')->nullable();
			$table->string('otherapplicationdates')->nullable();
			$table->string('otherapplicationactions')->nullable();
			$table->string('taxdecnum')->nullable();
			$table->string('transactioncode')->nullable();
			$table->float('landarea', 10, 0)->nullable();
			$table->string('ornumber')->nullable();
			$table->date('ordate')->nullable();
			$table->float('oramount', 10, 0)->nullable();
			$table->string('decision')->nullable();
			$table->string('deniedid')->nullable();
			$table->string('projecttype')->nullable();
			$table->float('endorsementfee', 10, 0)->nullable()->default(0);
			$table->string('verification_type')->nullable();
			$table->string('name_of_applicant')->nullable();
			$table->string('propose_proj_name')->nullable();
			$table->string('purpose')->nullable();
			$table->text('business_activity')->nullable();
			$table->text('prod_sold')->nullable();
			$table->string('num_emp')->nullable();
			$table->string('num_vehicle')->nullable();
			$table->integer('totalemp')->nullable()->default(0);
			$table->integer('empincity')->nullable()->default(0);
			$table->integer('novehicle2wheels')->nullable()->default(0);
			$table->integer('novehicle3wheels')->nullable()->default(0);
			$table->integer('novehicle4wheels')->nullable()->default(0);
			$table->integer('novehicle5upwheels')->nullable()->default(0);
			$table->string('lzbaresnum')->nullable();
			$table->boolean('brgy_cert_flag')->nullable();
			$table->boolean('tax_declaration_flag')->nullable();
			$table->boolean('sketch_plan_flag')->nullable();
			$table->string('evaluationoffacts')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaction');
	}

}
