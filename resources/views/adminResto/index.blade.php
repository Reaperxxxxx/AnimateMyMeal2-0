@extends('layouts.admin_template')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">choose a restaurant</div>

                    @php

                      $restaurants =App\Restaurant::where('id_User', Auth::id() )->get();

                        $array = array() ;


                        foreach ($restaurants as $restaurant)
                        {
                            $array[$restaurant->id] = $restaurant->name ;
                          // array_push($array,$restaurant->id=>$restaurant->name) ;
                        }
                    @endphp


                    <div class="panel-body">

                        {!! Form::open(['action' => ['AdminRestoController@setCookie'], 'method' => 'POST']) !!}

                        <div class="form-group">
                            {{Form::label('restaurant', 'restaurant')}}

                            {{Form::select('restaurant',$array,1,['class'=>'form-control','placeholder' => 'select restaurant'])}}

                        </div>

                        {{Form::hidden('_method','Get')}}
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