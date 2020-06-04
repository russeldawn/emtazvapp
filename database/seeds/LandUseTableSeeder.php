<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandUseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Commercialized-1 (Low Density)",
            "Commercialized-2 (Medium Density)",
            "Commercialized-3 (High Density)",
            "Green Corridor Zone",
            "Historic Zone",
            "Industrial-1 (Low Density non-pollutive with non-hazardous)",
            "Industrial-1 (Low Density non-pollutive with hazardous)",
            "Industrial-2 (Medium Density pollutive with hazardous)",
            "Industrial-2 (Medium Density pollutive with non-hazardous)",
            "Industrial-3 (Others)",
            "Mangrove Zone",
            "Planned Units of Development Zone (Block 1)",
            "Planned Units of Development Zone (Block 2)",
            "Planned Units of Development Zone (Block 3)",
            "Planned Units of Development Zone (Block 4)",
            "Planned Units of Development Zone (Block 5)",
            "Residential-1 (Light Density)",
            "Residential-2 (Medium Density)",
            "Residential-3 (High Density)",
            "Socialized Housing",
            "General Institutional Zone",
            "Parks and Recreation Zone",
            "Cemetery/ Memorial Park Zone",
            "Utilities and Services Zone",
            "Mega Cebu Green Loop Overlay Zone"
        ];

        for ($i=0; $i < count($data); $i++) {
            DB::table('land_use')->insert( [ 'value' => $data[$i] ] );
        }
    }
}
