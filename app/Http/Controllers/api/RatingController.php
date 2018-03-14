<?php

namespace App\Http\Controllers\api;

use App\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RatingController extends Controller
{

    public function show($id)
    {
        $rating = Rating::where([

            ['type', '=', $id],

        ]) ->get();
        return json_encode($rating) ;

    }

    public function getRating ($idClient,$type,$id_rated)
    {
        $rating = Rating::where([
        ['id_User', '=', $idClient],
        ['type', '=', $type],
        ['id_rated', '=', $id_rated],
    ]) ->get();


        return json_encode($rating) ;

    }

    public function getRatingAvg($type,$id_rated)
    {
        $count = Rating::where([

            ['type', '=', $type],
            ['id_rated', '=', $id_rated],

        ])->count('type') ;

        $avg = Rating::where([

            ['type', '=', $type],
            ['id_rated', '=', $id_rated],

        ])->avg('note') ;
        $name = "name" ;
        if ($type == "meal")
        {
            $name = "meal name" ;
        }
        if ($type == "asset")
        {
            $name = "ludo" ;
        }
        $table = array("tot"=>$count , "avg" =>$avg, "name"=>$name) ;
//        $rating = Rating::where ('id_User', '=', '1')->get()  ;
        return json_encode($table) ;

    }


    public function addRating(Request $request)
    {
        $rating = Rating::where([
            ['id_User', '=', $request->input('id_User')],
            ['type', '=', $request->input('type')],
            ['id_rated', '=', $request->input('id_rated')],
        ]) ->first();
    if ($rating == null)
      {$rating= new Rating() ; }

        $rating->id_rated = $request->input('id_rated') ;
        $rating->note = $request->input('note') ;
        $rating->type = $request->input('type') ;
        $rating->id_User = $request->input('id_User') ;
        $rating->comment = $request->input('comment') ;

        $rating->save() ;

        return json_encode($rating) ;
    }



    public function updateAPK ()
    {


        $updateMessage = "updated ";
        $versionCode = "3";
        $url = "http://192.168.1.2:8000/storage/public/Things_to_do.apk";
        $table = array("url" => $url, "versionCode" => $versionCode, "updateMessage" => $updateMessage);

        return json_encode($table,JSON_UNESCAPED_SLASHES);
    }
}
