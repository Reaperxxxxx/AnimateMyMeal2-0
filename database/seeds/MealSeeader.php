<?php

use Illuminate\Database\Seeder;
use App\Meal ;
use App\Category ;
use App\Restaurant ;

class MealSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $meal = new Meal() ;
        $meal->name="kafteji" ;
        $meal->price=12.000 ;
        $meal->description="aban kafteji tnajem tdhou9ou" ;
        $meal->id_category = 1;
        //$meal->category()->associate(Category::find(1));
        $meal->save() ;

        $meal0 = new Meal() ;
        $meal0->name="Pizza" ;
        $meal0->price=17.000 ;
        $meal0->description="aban Pizza tnajem tdhou9ha" ;
        $meal0->id_category = 1;
        //$meal->category()->associate(Category::find(1));
        $meal0->save() ;

        $meal1 = new Meal() ;
        $meal1->name="Beer" ;
        $meal1->price=4.500 ;
        $meal1->description="aban beer tnajem tdhou9ha" ;
        $meal1->id_category = 2;
        //$meal->category()->associate(Category::find(1));
        $meal1->save() ;

        $meal11 = new Meal() ;
        $meal11->name="Vodka Shot" ;
        $meal11->price=6.500 ;
        $meal11->description="aban Vodka tnajem tdhou9ha" ;
        $meal11->id_category = 2;
        //$meal->category()->associate(Category::find(1));
        $meal11->save() ;

        $meal2 = new Meal() ;
        $meal2->name="Milkshake" ;
        $meal2->price=8.000 ;
        $meal2->description="aban Milkshake tnajem tdhou9ou" ;
        $meal2->id_category = 3;
        //$meal->category()->associate(Category::find(1));
        $meal2->save() ;

        $meal3 = new Meal() ;
        $meal3->name="express" ;
        $meal3->price=3.500 ;
        $meal3->description="aban express tnajem tdhou9ou" ;
        $meal3->id_category = 4;
        //$meal->category()->associate(Category::find(1));
        $meal3->save() ;



    }
}
