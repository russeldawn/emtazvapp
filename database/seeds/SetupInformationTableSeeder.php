<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetupInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "value" => "Provision as to setback, yard requirements, bulk, easement, area height and other restriction shall strictly conform with the requirements of the National Building Code of the Philippines and other related laws.",
                "usage" => 1
            ],
            [
                "value" => "This decision shall be considered automatically revoked if project is not commenced within one (1) year from the date of issue of this decision.",
                "usage" => 1
            ],
            [
                "value" => "All noise and vibration producing machine/equipment shall be enclosed by building and shall be provided with effective noise absorbing materials.",
                "usage" => 1
            ],
            [
                "value" => "Electrical and/or electronic apparatus emitting electromagnetic waves must be regulated and controlled so as not to cause disturbance and harm to residents.",
                "usage" => 1
            ],
            [
                "value" => "Glare and heat from any operation or activity shall not be allowed to radiate, seen or felt from any point beyond the limits of.",
                "usage" => 1
            ],
            [
                "value" => "A one (1) meter distance along the periphery of the property shall be planted to dense and fast growing trees to serve as buffers.",
                "usage" => 1
            ],
            [
                "value" => "Person with Disability",
                "usage" => 2
            ],
            [
                "value" => "Senior Citizen",
                "usage" => 2
            ],
            [
                "value" => "All conditions stipulated herein from part of this decision and are subject for monitoring.",
                "usage" => 3
            ],
            [
                "value" => "Non-compliance therewith shall be cause for cancellation or legal action.",
                "usage" => 3
            ],
            [
                "value" => "The applicable requirements of government agencies and applicable provision of existing laws shall be complied with.",
                "usage" => 3
            ],
            [
                "value" => "No activity other than that applied for and granted shall be conducted within the project site.",
                "usage" => 3
            ],
            [
                "value" => "No major expansion, alteration and/or improvement shall be introduced without prior clearance from this office.",
                "usage" => 3
            ],
            [
                "value" => "This decision shall not be constructed as a Certification of Ownership over the parcel(s) of land subject of this decision.",
                "usage" => 3
            ],
            [
                "value" => "Any misinterpretation of facts, fals statement or allegation material to the issuance of this decision shall be sufficient cause for the revocation.",
                "usage" => 3
            ],
            [
                "value" => "Residential",
                "usage" => 4
            ],
            [
                "value" => "Industrial",
                "usage" => 4
            ],
            [
                "value" => "Institutional",
                "usage" => 4
            ],
            [
                "value" => "Commercial",
                "usage" => 4
            ],
            [
                "value" => "LTFRB",
                "usage" => 5
            ],
            [
                "value" => "DENR",
                "usage" => 5
            ],
            [
                "value" => "HLURB",
                "usage" => 5
            ],
            [
                "value" => "Pick-up",
                "usage" => 6
            ],
            [
                "value" => "By mail",
                "usage" => 6
            ],
            [
                "value" => "Applicant",
                "usage" => 6
            ],
            [
                "value" => "Authorized Rep.",
                "usage" => 6
            ],
            [
                "value" => "New Development",
                "usage" => 7
            ],
            [
                "value" => "Improvement",
                "usage" => 7
            ],
            [
                "value" => "Vacant/Idle",
                "usage" => 8
            ],
            [
                "value" => "Tenanted",
                "usage" => 8
            ],
            [
                "value" => "Not Tenanted",
                "usage" => 8
            ],
            [
                "value" => "Agricultural",
                "usage" => 8
            ],
            [
                "value" => "All",
                "usage" => 9
            ],
            [
                "value" => "Permanent",
                "usage" => 10
            ],
            [
                "value" => "Temporary (No. of yrs.)",
                "usage" => 10
            ],
            [
                "value" => "Owner",
                "usage" => 11
            ],
            [
                "value" => "Lessee",
                "usage" => 11
            ],
            [
                "value" => "Not Started",
                "usage" => 12
            ],
            [
                "value" => "New",
                "usage" => 12
            ],
            [
                "value" => "Endorsement In Progress",
                "usage" => 12
            ],
            [
                "value" => "Endorsed",
                "usage" => 12
            ],
            [
                "value" => "Approval In Progress",
                "usage" => 12
            ],
            [
                "value" => "Approved",
                "usage" => 12
            ],
            [
                "value" => "Cancelled",
                "usage" => 12
            ],
            [
                "value" => "Denied",
                "usage" => 12
            ],
            [
                "value" => "Variance",
                "usage" => 12
            ],
        ];

        for ($i=0; $i < count($data); $i++) {
            DB::table('setupinformation')->insert($data[$i]);
        }
    }
}
