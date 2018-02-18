<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category ;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->cookie('id_resto') == null)
        {return redirect('/adminResto');}


        $value = $request->cookie('id_resto');
        $categorys = Category::where('id_restaurant', $value )->get();

        return view('category.index')->with('categorys', $categorys);
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
        $this->validate($request, [
            'name' => 'required'
        ]);


        if ($request->cookie('id_resto') == null)
        {return redirect('/adminResto');}


        $value = $request->cookie('id_resto');


        $category = new Category;
        $category->name = $request->input('name') ;
        $category->id_restaurant = $value ;
        $category->save() ;

        return redirect('/category')->with('success', 'category added');
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
        $category= Category::find($id) ;

        return view('category.edit')->with('category',$category);
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
            'name' => 'required'

        ]);

        $category = Category::find($id);
        $category->name = $request->input('name');

        $category->save() ;

        return redirect('/category')->with('success', 'category added');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id) ;

            $category->delete();
            return redirect('/category')->with('success', 'category deleted');


    }

 public function cookie(Request $request)
{  if ($request->cookie('id_resto') == null)
{return redirect('/adminResto');}


    $value = $request->cookie('id_resto');
    return $value ; }
}
