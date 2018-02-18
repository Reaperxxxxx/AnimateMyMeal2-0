
@extends('layouts.app')

@section('content')
    <div class="col-sm-6">
<h1>Add Meal</h1>
{!! Form::open(['action' => 'MenuItemController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
</div>
<div class="form-group">
    {{Form::label('price', 'Price')}}
    {{Form::text('price', '', [ 'class' => 'form-control', 'placeholder' => 'price Text'])}}



</div>
<div class="form-group">
    {{Form::file('imageurl',[ 'id' => 'input-id','class' => 'file'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
    </div>


    @endsection