<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant ;

use App\User ;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restos = Restaurant::all();

        return view('admin.restaurants.index')->with('restos', $restos);
        //    return $restos ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'user' => 'required',
        ]);

        $resto = new Restaurant;
        $resto->name = $request->input('name');
        $resto->id_User = $request->input('user');
        $resto->save();

        return redirect('/restaurant')->with('success', 'Restaurant added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $resto= Restaurant::find($id) ;

        return view('admin.restaurants.edit')->with('resto',$resto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'Owner' => 'required',
        ]);

        $resto = Restaurant::find($id);
        $resto->name = $request->input('name');
        $resto->id_User = $request->input('Owner');
        $resto->save();

<<<<<<< HEAD
        return redirect('/restaurant')->with('success', 'Restaurant added');
=======
        return redirect('/restaurants')->with('success', 'Restaurant added');
>>>>>>> 5406c79a3249908cbbf5c338129fcc0a7a13918f
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $rest = Restaurant::find($id) ;

            if(auth()->user()->isAdmin()) {
                $rest->delete();
                return redirect('/restaurants')->with('success', 'Restaurant deleted');
            }
        abort("503",'not authorized') ;
    }




}