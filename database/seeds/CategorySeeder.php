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



        $cat23 = new Category() ;
        $cat23->name="food" ;
        $cat23->id_restaurant = "2";
        $cat23->save() ;

        //$cat->restaurant()->associate(Restaurant::find(1)) ;


        $cat24 = new Category() ;
        $cat24->name="Drinks" ;
        $cat24->id_restaurant = "2";
        $cat24->save() ;
        //$cat1->restaurant()->associate(Restaurant::find(1)) ;

        $cat25 = new Category() ;
        $cat25->name="cold" ;
        $cat25->id_restaurant = "2";
        $cat25->save() ;
        //$cat2->restaurant()->associate(Restaurant::find(1)) ;

        $cat313= new Category() ;
        $cat313->name="hot" ;
        $cat313->id_restaurant = "3";
        $cat313->save() ;
        //$cat3->restaurant()->associate(Restaurant::find(1)) ;



    }
}
