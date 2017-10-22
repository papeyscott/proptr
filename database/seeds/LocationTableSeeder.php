<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = new \App\Location();
        $location->country = 'Nigeria';
        $location->state = 'Lagos';
        $location->county = 'ikeja';
        $location->save();

         $location = new \App\Location();
        $location->country = 'Ghana';
        $location->state = 'Accra';
        $location->county = 'saints';
        $location->save();

         $location = new \App\Location();
        $location->country = 'USA';
        $location->state = 'maryland';
        $location->county = 'cartbury';
        $location->save();
    }
}
