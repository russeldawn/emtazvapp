<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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

}
