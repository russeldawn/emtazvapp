<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandUseProposeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Commercial",
            "Industrial",
            "Institutional",
            "Residential"
        ];

        for ($i=0; $i < count($data); $i++) {
            DB::table('land_use_propose')->insert([ 'value' => $data[$i]]);
        }
    }
}
