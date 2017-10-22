<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->name = "ayodeji";
        $admin->email = "test@null.com";
        $admin->password = bcrypt('admin');
        $admin->phone_number = "07033751685";
        $admin->country = "nigeria";
        $admin->state = "lagos";
        $admin->county = "ikeja";
        $admin->save(); 
    }
}
