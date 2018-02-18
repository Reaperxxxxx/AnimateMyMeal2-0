@extends('layouts.admin_template')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update a restaurant</div>

                    @php
                        $categories =App\CategoryAsset::all();
$array = array() ;


                        foreach ($categories as $category)
                        {
                        $array[$category->id] = $category->name ;
                      // array_push($array,$category->id=>$category->name) ;


    }
                    @endphp

                    <div class="panel-body">


                        {!! Form::open(['action' => ['AssetStoreController@update', $asset->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $asset->name, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', $asset->price, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::text('description', $asset->description, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('category', 'Category')}}

                            {{Form::select('category',$array,$asset->categoryAsset->name,['class'=>'form-control','placeholder' => 'select category'])}}

                        </div>

                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


{{--@extends('layouts.layoutDash')--}}

{{--@section('content')--}}


{{--@endsection--}}