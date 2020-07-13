<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = User::all();

		foreach ($users as $user) {
			$user->userpassword = bcrypt('test');
			$user->save();
		}
    }
}
