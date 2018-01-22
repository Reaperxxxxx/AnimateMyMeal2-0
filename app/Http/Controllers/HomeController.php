<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->isAdmin())
        {
            return view('admin.index');

        }
        if ($request->user()->isSimpleUser())
        {
            return view('simpleUser.index');

        }
        if ($request->user()->isAdminResto())
        {
            return view('adminResto.index');

        }
    }
}
