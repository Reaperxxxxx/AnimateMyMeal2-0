@extends('layouts.admin_template')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update a restaurant</div>



                    <div class="panel-body">


                        {!! Form::open(['action' => ['CategoryAssetController@update', $categoryAsset->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $categoryAsset->name, ['class' => 'form-control'])}}
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