<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category ;
use App\Restaurant ;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all() ;
        return json_encode($cats) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $cat = Category::find($id) ;
       return json_encode($cat) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function catbyresto($id_resto)
    {
        $resto = Restaurant::find($id_resto) ;
        $cats = $resto->categories ;

        return json_encode($cats) ;
    }

    public function catWithMeals($id_resto)
    {

        $resto = Restaurant::find($id_resto) ;
        $cats = $resto->categories ;
        //$meals = Meal::with('category_id') ;
        $i=0;

        foreach ($cats as $cat)
        {
            $tabmeals=array();
            //$meal= Meal::find($cat->id) ;
            $meals=$cat->meals;
            foreach ($meals as $meal) {
                array_push($tabmeals,$meal);
            }
            $cats[$i]['meals'] = $tabmeals;
            $i++;
        }

        return json_encode($cats, JSON_UNESCAPED_SLASHES) ;


    }

}
