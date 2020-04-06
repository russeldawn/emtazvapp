<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "id" => 1,
            "usage" => "Landuse Verification",
            "amount" => "332.75"
        ];

        DB::table('paymentsettings')->insert($data);
    }
}
