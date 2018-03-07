<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Promotion;


class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('promotion.index')->with('promotions', $promotions);
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
            'percent' => 'required',

        ]);

        $promotion = new Promotion;
        $promotion->name = $request->input('name');
        $promotion->percent = $request->input('percent');
         
        $promotion->save() ;

        return redirect('/promotion')->with('success', 'promotion added');
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

        $promotion= Promotion::find($id) ;

        return view('promotion.edit')->with('promotion',$promotion);
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
            'percent' => 'required',

        ]);

        $promotion = Promotion::find($id);;
        $promotion->name = $request->input('name');
        $promotion->percent = $request->input('percent');

        $promotion->save() ;

        return redirect('/promotion')->with('success', 'promotion added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id) ;

        if(auth()->user()->isAdmin()) {
            $promotion->delete();
            return redirect('/promotion')->with('success', 'promotion deleted');
        }
        abort("503",'not authorized') ;
    }
}
