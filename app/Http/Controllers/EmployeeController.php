<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee ;

class EmployeeController extends Controller
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
        $employees= Employee::where('id_restaurant', $value )->get();

        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function res ($idrest)
    {   $minutes = 100;
        $employees = Employee::all() ;
        $response =   redirect('/employee')->with('employees', $employees) ;

        $response->withCookie(cookie('id_resto', $idrest, $minutes));
        return $response  ;

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

        $employee = new Employee;
        $employee->name = $request->input('name') ;
        $employee->id_restaurant = $value ;

        $employee->save() ;

        return redirect('/employee')->with('success', 'employee added');
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
        $employee= Employee::find($id) ;

        return view('employee.edit')->with('employee',$employee);
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

        $employee = Employee::find($id);
        $employee->name = $request->input('name');

        $employee->save() ;

        return redirect('/employee')->with('success', 'employee added');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id) ;

        $employee->delete();
        return redirect('/employee')->with('success', 'employee deleted');


    }
}
