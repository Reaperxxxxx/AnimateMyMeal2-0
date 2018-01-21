
@extends('layouts.app')

@section('content')
@if(count($listMenuItems)>0)
    <ul>
    @foreach($listMenuItems as $item)

     <li>{{$item->name}}</li>

        @endforeach
    </ul>
    @endif

@endsection