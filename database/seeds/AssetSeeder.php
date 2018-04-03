<?php

use App\Asset;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asset = new Asset() ;
        $asset->name="Flappy Burger";
        $asset->description="Flappy Burger game " ;
        $asset->price=30.0;
        $asset->save();

        $asset2 = new Asset();
        $asset2->name="Color Switch" ;
        $asset2->description="Color Switch game " ;
        $asset2->price=40.0;
        $asset2->save() ;

        $asset3 = new Asset() ;
        $asset3->name="Tomato PingPong";
        $asset3->description="Tomato PingPong game " ;
        $asset3->price=50.0;
        $asset3->save();
    }
}
