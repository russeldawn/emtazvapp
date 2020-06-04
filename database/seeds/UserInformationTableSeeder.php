<?php

use Illuminate\Database\Seeder;
use App\Model\UserInformation;
use Illuminate\Support\Facades\DB;

class UserInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\UserInformation', 1)->create();
        // DB::table('userinformation')->insert(json_decode($data,true));

        // dd($data->items);
    }
}
