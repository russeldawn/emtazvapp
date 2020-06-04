<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandUseClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = DB::table('landuseclass')->orderBy('landuse_id')->get();
        // dd($data);

        $land_use_list = [
            [
              "landuse" => "Commercialized-1 (Low Density)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Commercialized-1 (Low Density)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Commercialized-1 (Low Density)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Commercialized-1 (Low Density)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Commercialized-2 (Medium Density)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Commercialized-2 (Medium Density)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Commercialized-2 (Medium Density)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Commercialized-2 (Medium Density)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Commercialized-3 (High Density)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Commercialized-3 (High Density)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Commercialized-3 (High Density)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Commercialized-3 (High Density)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Green Corridor Zone",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Green Corridor Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Green Corridor Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Green Corridor Zone",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Historic Zone",
              "propose" => "Residential",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Historic Zone",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Historic Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Historic Zone",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with non-hazardous)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with non-hazardous)",
              "propose" => "Commercial",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with non-hazardous)",
              "propose" => "Industrial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with non-hazardous)",
              "propose" => "Institutional",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with hazardous)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with hazardous)",
              "propose" => "Commercial",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with hazardous)",
              "propose" => "Industrial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Industrial-1 (Low Density non-pollutive with hazardous)",
              "propose" => "Institutional",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with hazardous)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with hazardous)",
              "propose" => "Commercial",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with hazardous)",
              "propose" => "Industrial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with hazardous)",
              "propose" => "Institutional",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with non-hazardous)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with non-hazardous)",
              "propose" => "Commercial",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with non-hazardous)",
              "propose" => "Industrial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Industrial-2 (Medium Density pollutive with non-hazardous)",
              "propose" => "Institutional",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-3 (Others)",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-3 (Others)",
              "propose" => "Commercial",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Industrial-3 (Others)",
              "propose" => "Industrial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Industrial-3 (Others)",
              "propose" => "Institutional",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "Mangrove Zone",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mangrove Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mangrove Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mangrove Zone",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 1)",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 1)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 1)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 1)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 2)",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 2)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 2)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 2)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 3)",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 3)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 3)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 3)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 4)",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 4)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 4)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 4)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 5)",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 5)",
              "propose" => "Commercial",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 5)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Planned Units of Development Zone (Block 5)",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Residential-1 (Light Density)",
              "propose" => "Residential",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Residential-1 (Light Density)",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-1 (Light Density)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-1 (Light Density)",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-2 (Medium Density)",
              "propose" => "Residential",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Residential-2 (Medium Density)",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-2 (Medium Density)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-2 (Medium Density)",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-3 (High Density)",
              "propose" => "Residential",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Residential-3 (High Density)",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-3 (High Density)",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Residential-3 (High Density)",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Socialized Housing",
              "propose" => "Residential",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Socialized Housing",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Socialized Housing",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Socialized Housing",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "General Institutional Zone",
              "propose" => "Residential",
              "condition" => "Waiver"
            ],
            [
              "landuse" => "General Institutional Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "General Institutional Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "General Institutional Zone",
              "propose" => "Institutional",
              "condition" => "Conformance"
            ],
            [
              "landuse" => "Parks and Recreation Zone",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Parks and Recreation Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Parks and Recreation Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Parks and Recreation Zone",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Cemetery/ Memorial Park Zone",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Cemetery/ Memorial Park Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Cemetery/ Memorial Park Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Cemetery/ Memorial Park Zone",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Utilities and Services Zone",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Utilities and Services Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Utilities and Services Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Utilities and Services Zone",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mega Cebu Green Loop Overlay Zone",
              "propose" => "Residential",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mega Cebu Green Loop Overlay Zone",
              "propose" => "Commercial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mega Cebu Green Loop Overlay Zone",
              "propose" => "Industrial",
              "condition" => "Non-Conformance"
            ],
            [
              "landuse" => "Mega Cebu Green Loop Overlay Zone",
              "propose" => "Institutional",
              "condition" => "Non-Conformance"
            ]
        ];

        for ($i=1; $i < count($land_use_list); $i++) {
            $land_use_list[$i]['landuse_id'] = $i;
            DB::table('landuseclass')->insert($land_use_list[$i]);
        }
    }
}
