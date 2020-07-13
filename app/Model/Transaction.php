<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Transaction extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transaction';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
	protected $primaryKey = 'transactionid';


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 	[
		"transactionid",
        "dateapplied",
        "applicantid",
        "compliance",
        "companyname",
        "authorizedrep",
        "address",
        "barangayid",
        "natureofproject",
        "locofarea",
        "rightoverland",
        "pinnum",
        "proposelanduse",
        "currentactivity",
        "projectcost",
        "locationclearance",
        "endorserid",
        "endorsementstatus",
        "approverstatus",
        "approverid",
        "status",
        "remarks",
        "projecttypeid",
        "projecttenure",
        "areaofproject",
        "crop",
        "decisionrelease",
        "deputized",
        "noticeissuer",
        "noticedate",
        "similarapplication",
        "otherapplicationlocation",
        "otherapplicationdates",
        "otherapplicationactions",
        "taxdecnum",
        "transactioncode",
        "landarea",
        "ornumber",
        "ordate",
        "oramount",
        "decision",
        "deniedid",
        "projecttype",
        "endorsementfee",
        "verification_type",
        "name_of_applicant",
        "propose_proj_name",
        "purpose",
        "business_activity",
        "prod_sold",
        "num_emp",
        "num_vehicle",
        "totalemp",
        "empincity",
        "novehicle2wheels",
        "novehicle3wheels",
        "novehicle4wheels",
        "novehicle5upwheels",
        "lzbaresnum",
        "brgy_cert_flag",
        "tax_declaration_flag",
        "sketch_plan_flag",
        "evaluationoffacts",
	];

	/**
     * Get the barangay record associated with the user.
     */
    public function barangay()
    {
        return $this->hasOne('App\Model\Barangay', 'barangay_id', 'barangayid');
	}

	/**
     * Get the custom format of Transaction's ID.
     *
     * @param  string  $value
     * @return string
     */
    public function getTransactionidAttribute($value)
    {
		$transactionid = str_pad($value, 8, '0', STR_PAD_LEFT);
		$dateapplied = Carbon::parse($this->dateapplied)->format('mdY');

        return [
			'id' => $value,
			'modified_id' => "MCT#-{$dateapplied}-$transactionid"
		];
	}

	/**
     * Get the custom format of Transaction's dateapplied.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateappliedAttribute($value)
    {
		$dateapplied = Carbon::parse($value)->format('m/d/Y');

        return $dateapplied;
    }
}
