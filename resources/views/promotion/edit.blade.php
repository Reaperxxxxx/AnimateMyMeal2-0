@extends('layouts.admin_template')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update a restaurant</div>


                    <div class="panel-body">


                        {!! Form::open(['action' => ['PromotionController@update', $promotion->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $promotion->name, ['class' => 'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('percent', 'Percent')}}
                            {{Form::text('percent', $promotion->percent, ['class' => 'form-control'])}}
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