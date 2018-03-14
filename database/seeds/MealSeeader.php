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
        $meal->img_url="https://upload.wikimedia.org/wikipedia/commons/6/6c/Kefteji%2C_Tunisie_2009.jpg";
        $meal->category_id = 1;
        $meal->preparation_time_min = 25;
        //$meal->category()->associate(Category::find(1));
        $meal->save() ;

        $meal0 = new Meal() ;
        $meal0->name="Pizza" ;
        $meal0->img_url="http://www.freepngimg.com/download/pizza/7-2-pizza-free-png-image.png" ;
        $meal0->price=17.000 ;
        $meal0->description="aban Pizza tnajem tdhou9ha" ;
        $meal0->preparation_time_min = 20;

        $meal0->category_id = 1;
        //$meal->category()->associate(Category::find(1));
        $meal0->save() ;

        $meal1 = new Meal() ;
        $meal1->name="Beer" ;
        $meal1->price=4.500 ;
        $meal1->description="aban beer tnajem tdhou9ha" ;
        $meal1->img_url="https://gallery.yopriceville.com/var/resizes/Free-Clipart-Pictures/Drinks-PNG-/Mug-with-Beer-PNG-Vector-Clipart-Image.png?m=1507172108";
        $meal1->category_id = 2;
        $meal1->preparation_time_min = 2;

        //$meal->category()->associate(Category::find(1));
        $meal1->save() ;

        $meal11 = new Meal() ;
        $meal11->name="Vodka Shot" ;
        $meal11->img_url="http://www.dekuyperusa.com/content/images/recipes/card/boo-berry-scream.png";
        $meal11->price=6.500 ;
        $meal11->description="aban Vodka tnajem tdhou9ha" ;
        $meal11->category_id = 2;
        $meal11->preparation_time_min = 2;

        //$meal->category()->associate(Category::find(1));
        $meal11->save() ;

        $meal2 = new Meal() ;
        $meal2->name="Milkshake" ;
        $meal2->img_url="https://png.pngtree.com/element_pic/16/11/01/efe156c8c5717ed6755e8b0c6cd5c198.jpg";
        $meal2->price=8.000 ;
        $meal2->description="aban Milkshake tnajem tdhou9ou" ;
        $meal2->category_id = 3;
        $meal2->preparation_time_min = 5;

        //$meal->category()->associate(Category::find(1));
        $meal2->save() ;

        $meal3 = new Meal() ;
        $meal3->name="express" ;
        $meal3->img_url="https://png.pngtree.com/element_origin_min_pic/16/10/28/0f4ba4289310a26b6cc0baa6975e71c4.jpg" ;
        $meal3->price=3.500 ;
        $meal3->description="aban express tnajem tdhou9ou" ;
        $meal3->category_id = 4;
        $meal3->preparation_time_min = 5;

        //$meal->category()->associate(Category::find(1));
        $meal3->save() ;



    }
}
