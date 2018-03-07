<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Meal;
use App\User ;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();

        return view('meal.index')->with('meals', $meals);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category'=>'required',
            'price'=>'required',
            'meal_image'=>'required'
        ]);

        $meal = new Meal;
        $meal->name = $request->input('name');
        $meal->description = $request->input('description');
        $meal->price = $request->input('price') ;
        $meal->category_id = $request->input('category') ;
        if ($request->input('prep_time')!=null)
        {
            $meal->preparation_time_min = $request->input('prep_time');
        }
        if (Input::hasfile('meal_image'))
        {
            $imagePath1 = $request->file('meal_image')->store('public');
            Storage::disk('public')->put('public',Input::file('meal_image'));
            $meal->img_url = $imagePath1 ;
        }
        $meal->save() ;

        return redirect('/meal')->with('success', 'Meal added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $meal= Meal::find($id) ;

        return view('meal.edit')->with('meal',$meal);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category'=>'required',
            'price'=>'required'
        ]);

        $meal = Meal::find($id);;
        $meal->name = $request->input('name');
        $meal->description = $request->input('description');
        $meal->price = $request->input('price') ;
        $meal->category_id = $request->input('category') ;
        $meal->save() ;

        return redirect('/meal')->with('success', 'Meal added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal = Meal::find($id) ;

        if(auth()->user()->isAdmin()) {
            $meal->delete();
            return redirect('/meal')->with('success', 'Meal deleted');
        }
        abort("503",'not authorized') ;
    }
}
