

@extends('layouts.admin_template')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Meals</div>

                    <div class="panel-body">


                        @if(count($meals)>0)

                            <table class="table table-bordered">
                                <th>name</th>
                                <th>description</th>
                                <th>category</th>
                                <th>price</th>
                                <th>Order id</th>


                                @foreach($meals as $meal)

                                    <tr>
                                        <td>{{$meal->name}}</td>
                                        <td>{{$meal->description}}</td>
                                        <td>{{App\Category::where('id',$meal->category_id)->pluck('name')->first()}}</td>
                                        <td>{{$meal->price}}</td>
                                        <td>{{ $orderId }}</td>





                                    </tr>

                                @endforeach

                            </table>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


{{--@extends('layouts.layoutDash')--}}

{{--@section('content')--}}


{{--@endsection--}}