<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangays = [
            "Alang-alang",
            "Bakilid",
            "Banilad",
            "Basak",
            "Cabancalan",
            "Cambaro",
            "Canduman",
            "Casili",
            "Casuntingan",
            "Centro (pob.)",
            "Cubacub",
            "Guizo",
            "Ibabao-Estancia",
            "Jagobiao",
            "Labogon",
            "Looc",
            "Maguikay",
            "Mantuyong",
            "Opao",
            "Pakna‑an",
            "Pagsabungan",
            "Subangdaku",
            "Tabok",
            "Tawason",
            "Tingub",
            "Tipolo",
            "Umapad",
            "City Special Economic Administrative Zone"
        ];

        for ($i=1; $i < count($barangays)-1; $i++) {
            DB::table('barangay')->insert([ 'barangay_name' => $barangays[$i]]);

        }
    }
}