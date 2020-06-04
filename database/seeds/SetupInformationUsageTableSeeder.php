<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetupInformationUsageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "additional conditions",
            "applicant type",
            "conditions",
            "existing land use",
            "landuse purpose",
            "mode of release",
            "nature of project",
            "nature of use",
            "others",
            "project tenure",
            "right over land",
            "workflow state"
        ];
        for ($i=0; $i < count($data); $i++) {
            DB::table('setup_information_usage')->insert([ 'usage' => $data[$i]]);
        }
    }
}
