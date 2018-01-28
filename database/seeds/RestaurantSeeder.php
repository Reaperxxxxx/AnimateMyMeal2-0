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
        $resto->img_url="https://www.gannett-cdn.com/-mm-/189c8c54dc721d8e55dc03878f0760741e18c895/c=0-22-580-457&r=x404&c=534x401/local/-/media/2016/09/11/USATODAY/usatsports/chilis-remodel-1_large.jpg" ;
        $resto->user()->associate(User::find(2)) ;
        $resto->save() ;

        $resto = new Restaurant();
        $resto->name="soltan" ;
        $resto->img_url="http://sultanbaklava.com/wp-content/uploads/2014/07/sultan-shop.jpg" ;
        $resto->user()->associate(User::find(2)) ;
        $resto->save() ;

        $resto = new Restaurant();
        $resto->name="Plan B" ;
        $resto->img_url="https://i.pinimg.com/736x/23/18/69/231869aec99b3684580fcb2e7eeb9c07--flourless-chocolate-cakes-restaurant-.jpg" ;
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
