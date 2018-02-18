<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;


class AssetStoreController extends Controller
{


    public function details ($id )

    {
        $asset = Asset::find($id);
        return view ('assetStore.assetDetails')->with('asset',$asset) ;
    }


    public function assetStore ()
    {

        $asset = Asset::all() ;
        return view ('assetStore.assetAcceuil')->with('assets',$asset) ;
    }
    public function assetStoreCat ($id)
    {

        $asset = Asset::all()->where('id_Category',$id);
        return view ('assetStore.assetAcceuil')->with('assets',$asset) ;
    }



    public function index()
    {
        $assets = Asset::all();

        return view('assetStore.index')->with('assets', $assets);
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
            'description' => 'required',
            'category'=>'required',
            'price'=>'required',
            'asset_link'=>'required'
        ]);

        $asset = new Asset;

if (Input::hasfile('image1'))
    {
        $imagePath1 = $request->file('image1')->store('public');
        Storage::disk('public')->put('public',Input::file('image1'));
        $asset->image1 = $imagePath1 ;
    }

        if (Input::hasfile('image2'))
        {
            $imagePath2 = $request->file('image2')->store('public');
            Storage::disk('public')->put('public',Input::file('image2'));
            $asset->image2 = $imagePath2 ;
        }

        if (Input::hasfile('image1'))
        {
            $imagePath3 = $request->file('image3')->store('public');
            Storage::disk('public')->put('public',Input::file('image3'));
            $asset->image3 = $imagePath3 ;
        }

        if (Input::hasfile('image1'))
        {
            $imagePath4 = $request->file('image4')->store('public');
            Storage::disk('public')->put('public',Input::file('image4'));
            $asset->image4 = $imagePath4 ;
        }
        if (Input::hasfile('asset_link'))
        {
            $asset_link = $request->file('asset_link')->store('public');
            Storage::disk('public')->put('public',Input::file('asset_link'));
            $asset->asset_link = $asset_link ;
        }


      //  $image = Image::make(Storage::get($imagePath))->resize(320,240)->encode();
       // Storage::put($imagePath,$image);




        $asset->name = $request->input('name');
        $asset->description = $request->input('description');
        $asset->price = $request->input('price') ;
        $asset->id_category = $request->input('category') ;

        $asset->id_user= auth()->id() ;
        $asset->save() ;

        return redirect('/asset')->with('success', 'asset added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $asset= Asset::find($id) ;
        return view ('assetStore.show')->with('asset',$asset) ;
    }


    public function getDownload()
    {

         $file= public_path(). "/v2.rar";

        $headers = [
            'Content-Type' => 'application/rar',
        ];
      // return Storage::disk('jpg')->put('file.jpg','contents');
       return response()->download($file, 'v2.rar', $headers);
    }
    public function edit($id)
    {

        $asset= Asset::find($id) ;

        return view('assetStore.edit')->with('asset',$asset);
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
            'description' => 'required',
            'category'=>'required',
            'price'=>'required' ,
            'asset_link'=>'required'
        ]);
        if( Input::hasFile('asset_link')){return redirect('/assset')->with('success', 'asset added');}

        $asset = Asset::find($id);;
        $asset->name = $request->input('name');
        $asset->description = $request->input('description');
        $asset->price = $request->input('price') ;
        $asset->id_category = $request->input('category') ;
        $asset->asset_link = $request->input('asset_link')->name() ;
        $asset->save() ;

        return redirect('/asset')->with('success', 'asset added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id) ;

        if(auth()->user()->isAdmin()) {
            $asset->delete();
            return redirect('/asset')->with('success', 'asset deleted');
        }
        abort("503",'not authorized') ;
    }
}
