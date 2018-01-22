@extends('layouts.admin_template')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update a restaurant</div>

                    @php
                    $users =App\User::all();

                    foreach ($users as $user)
                    {

                        $array= [
                            $user->id=>$user->name
                        ];

}
                    @endphp

                    <div class="panel-body">


                            {!! Form::open(['action' => ['RestaurantController@update', $resto->id], 'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name')}}
                                {{Form::text('name', $resto->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('Owner', 'Owner')}}

                                  {{Form::select('Owner',$array,$resto->user->id,['class'=>'form-control'])}}

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