<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandUseConditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Conformance",
            "Non-Conformance",
            "Waiver"
        ];

        for ($i=0; $i < count($data); $i++) {
            DB::table('land_use_condition')->insert( [ 'value' => $data[$i] ] );
        }
    }
}
