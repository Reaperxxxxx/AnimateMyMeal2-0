<?php

namespace App\Http\Controllers;

use App\Device;
use App\Meal;
use App\Order;
use App\OrderList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->cookie('id_resto') == null)
        {
            return redirect('/adminResto');
        }else{


            $idResto = $request->cookie('id_resto');
            $devices = Device::where('id_restaurant', $idResto )->get();
            $orders = Order::whereIn('device_id',$devices)->get();


            return view('adminResto.orders')->with('orders',$orders);
        }


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
        //
        $mealsIds = OrderList::where('order_id',$id)->pluck('meal_id');
        $meals = Meal::whereIn('id',$mealsIds)->get();

        return view('adminResto.order_details')->with('meals',$meals)->with('orderId',$id);
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
}
