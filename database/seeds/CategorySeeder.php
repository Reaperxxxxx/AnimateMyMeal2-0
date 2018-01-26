<?php

use Illuminate\Database\Seeder;
use App\Category ;
use App\Restaurant ;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $cat = new Category() ;
        $cat->name="food" ;
        $cat->id_restaurant = "1";
        $cat->save() ;

        //$cat->restaurant()->associate(Restaurant::find(1)) ;


        $cat1 = new Category() ;
        $cat1->name="Drinks" ;
        $cat1->id_restaurant = "1";
        $cat1->save() ;
        //$cat1->restaurant()->associate(Restaurant::find(1)) ;

        $cat2 = new Category() ;
        $cat2->name="cold" ;
        $cat2->id_restaurant = "1";
        $cat2->save() ;
        //$cat2->restaurant()->associate(Restaurant::find(1)) ;

        $cat3= new Category() ;
        $cat3->name="hot" ;
        $cat3->id_restaurant = "1";
        $cat3->save() ;
        //$cat3->restaurant()->associate(Restaurant::find(1)) ;

    }
}
