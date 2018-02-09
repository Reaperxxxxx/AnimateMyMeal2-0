<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class AdminRestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('adminResto.index') ;
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

    public function stat()
    {
        $population =\Lava::DataTable();

        $population->addDateColumn('Year')
            ->addNumberColumn('Number of People')
            ->addRow(['2006', 623452])
            ->addRow(['2007', 685034])
            ->addRow(['2008', 716845])
            ->addRow(['2009', 757254])
            ->addRow(['2010', 778034])
            ->addRow(['2011', 792353])
            ->addRow(['2012', 839657])
            ->addRow(['2013', 842367])
            ->addRow(['2014', 873490]);

        \Lava::AreaChart('Population', $population, [
            'title' => 'Population Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]) ;



        ///////


        $votes  =\Lava::DataTable();

        $votes->addStringColumn('Food Poll')
            ->addNumberColumn('Votes')
            ->addRow(['Tacos',  rand(1000,5000)])
            ->addRow(['Salad',  rand(1000,5000)])
            ->addRow(['Pizza',  rand(1000,5000)])
            ->addRow(['Apples', rand(1000,5000)])
            ->addRow(['Fish',   rand(1000,5000)]);

        \Lava::BarChart('Votes', $votes);


        /*************/
        $lava = new Lavacharts; // See note below for Laravel

        $finances  =\Lava::DataTable();

        $finances->addDateColumn('Year')
            ->addNumberColumn('Sales')
            ->addNumberColumn('Expenses')
            ->setDateTimeFormat('Y')
            ->addRow(['2004', 1000, 400])
            ->addRow(['2005', 1170, 460])
            ->addRow(['2006', 660, 1120])
            ->addRow(['2007', 1030, 54]);

        \Lava::ColumnChart('Finances', $finances, [
            'title' => 'Company Performance',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ]
        ]);




        return view('adminResto.statistics');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setCookie (Request $request)
    {

        $this->validate($request, [
            'restaurant' => 'required',

        ]);

        $minutes = 100;

        $response =  redirect('statsResto');;
        $response->withCookie(cookie('id_resto',  $request->input('restaurant'), $minutes));
        return $response ;
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
