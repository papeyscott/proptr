<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $admin = new \App\User();
        $admin->purpose = "1";
        $admin->firstname = "ayodeji";
        $admin->lastname = "tade";
        $admin->email = "test@null.com";
        $admin->password = bcrypt('admin');
        $admin->chanel = "google";
        $admin->save();
    }
}
