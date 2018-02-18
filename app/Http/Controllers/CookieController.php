<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller {
    public function setCookie(Request $request){
   //
        //
        //     $employees = Employee::all() ;
        $minutes = 100;
        $response =   redirect('statsResto');

        $response->withCookie(cookie('nameeee', 'vaaz', $minutes));
        return $response  ;
    }
    public function getCookie(Request $request){
        $value = $request->cookie('nameeee');
        echo $value;
    }
}