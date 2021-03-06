<?php

namespace App\Http\Controllers\api;

use App\Meal;
use App\Order;
use App\OrderList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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

    public function createOrderWithMealsIds($mealsIds,$total){

        $mealsIdsArray = explode(",",$mealsIds);
        $order = new Order();
        $order->device_id = "1";
        $order->is_ready = 0;
        $order->total = $total ;
        $order->save();

        $orders = $order->orderBy('id','desc')->get();
        $orderId = $orders[0]->id;
        //  return json_encode($orderId);
        $prepTime = 0;

        $hashset = array();

        foreach ($mealsIdsArray as $meal){
            $ol = new OrderList();
            $ol->meal_id = $meal;
            $ol->order_id = $orderId;
            $ol->save();

            if (!array_key_exists($meal, $hashset)){
                $hashset[$meal] = true;
            }

            //$prepTime += $meal->preparation_time_min;
        }

        foreach ($hashset as $key => $value){

            $meal = Meal::find($key);
            $prepTime += $meal->preparation_time_min;
        }
        
        return $prepTime;
       // return json_encode($mealsIdsArray[3]);
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
        $order = Order::find($id);
        $ols = $order->orderLists();
        return json_encode($ols);
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
