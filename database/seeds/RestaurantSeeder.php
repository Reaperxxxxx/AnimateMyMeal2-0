<?php

use Illuminate\Database\Seeder;
use App\Restaurant ;
use App\User ;
class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resto = new Restaurant();
        $resto->name="Chilli's" ;
        $resto->user()->associate(User::find(2)) ;
        $resto->save() ;


    }
}
