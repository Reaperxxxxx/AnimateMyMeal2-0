<?php

namespace App\Http\Controllers\api;

use App\Asset;
use App\Http\Controllers\Controller;
use App\Restaurant;
use App\RestaurantAnimation;
use Illuminate\Http\Request;

class RestaurantAnimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restosAssets = RestaurantAnimation::all() ;
        //$restos = Restaurant::with('user')->get() ;
        return json_encode($restosAssets, JSON_UNESCAPED_SLASHES) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'restaurant_id' => 'required',
//            'asset_id' => 'required',
//        ]);
//
//        $restaurantAsset = new RestaurantAnimation();
//        $restaurantAsset->restaurant_id = $request->input('restaurant_id');
//        $restaurantAsset->animation_id = $request->input('asset_id');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_rest)
    {
        $restoAssets = RestaurantAnimation::where('restaurant_id',$id_rest)->get();

        $restaurant = new Restaurant();
        $currentrest = $restaurant->find($id_rest);
        $r = $currentrest->restaurantanimations();

        $data = Restaurant::with('restaurantanimations.animation')->findOrFail($id_rest) ;
        $data= $data->getAttribute('restaurantanimations') ;
       $data=$data->pluck('animation')->pluck('name');

      foreach ($data as $d )
      {
          $result[] = array('name'=> $d);
      }

        $jsonString =  json_encode($result,JSON_UNESCAPED_SLASHES);
      return $jsonString ;
//
//        $tags = array("");
//        $i = 0;
//        foreach ($restoAssets as $rA)
//        {
//            $id = $rA->animation_id;
//            $asset = Asset::find($id)->pluck('name');
//            $tags[$i] = $asset->name;
//
//                $i++;
//        }
//

        return json_encode($r, JSON_UNESCAPED_SLASHES) ;
      //  return json_encode($tags, JSON_UNESCAPED_SLASHES) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RestaurantAnimation  $restaurantAnimation
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantAnimation $restaurantAnimation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RestaurantAnimation  $restaurantAnimation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantAnimation $restaurantAnimation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RestaurantAnimation  $restaurantAnimation
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantAnimation $restaurantAnimation)
    {
        //
    }

    public function createrestaurantanimation($restaurant_id,$asset_id){


        $restaurantAsset = new RestaurantAnimation();
        $restaurantAsset->restaurant_id = $restaurant_id;
        $restaurantAsset->animation_id = $asset_id ;
        $restaurantAsset->save();


        // return json_encode($mealsIdsArray[3]);
    }
}
