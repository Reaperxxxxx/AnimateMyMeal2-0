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

        $resto = new Restaurant();
        $resto->name="Plan B" ;
        $resto->user()->associate(User::find(2)) ;
        $resto->save() ;

        $resto = new Restaurant();
        $resto->name="La Terrasse" ;
        $resto->user()->associate(User::find(2)) ;
        $resto->save() ;


    }
}
