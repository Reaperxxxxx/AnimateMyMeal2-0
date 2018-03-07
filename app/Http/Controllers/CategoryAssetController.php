<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryAsset ;

class CategoryAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        $categorysAsset = CategoryAsset::all();

        return view('categoryAsset.index')->with('categorysAsset', $categorysAsset);
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



        $categoryAsset = new CategoryAsset;
        $categoryAsset->name = $request->input('name') ;

        $categoryAsset->save() ;

        return redirect('/categoryAsset')->with('success', 'category Asset added');
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
        $categoryAsset= CategoryAsset::find($id) ;

        return view('categoryAsset.edit')->with('categoryAsset',$categoryAsset);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);

        $categoryAsset = CategoryAsset::find($id);
        $categoryAsset->name = $request->input('name');

        $categoryAsset->save() ;

        return redirect('/categoryAsset')->with('success', 'category Asset added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryAsset = CategoryAsset::find($id) ;

            $categoryAsset->delete();
            return redirect('/categoryAsset')->with('success', 'category Asset deleted');


    }


}
