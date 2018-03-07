@extends('layouts.admin_template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Commandes</div>

                    <div class="panel-body">


                        @if(count($orders)>0)

                            <table class="table table-bordered">
                                <th>Order Id</th>
                                <th>Numero Table</th>
                                <th>Crée à</th>
                                <th>Totale</th>
                                <th>Action</th>

                                @foreach($orders as $order)

                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->device_id}}</td>
                                        <td>{{$order->updated_at}}</td>
                                        <td>{{$order->total}}</td>
                                        <td><a href="/mesCommandes/{{$order->id}}" class="btn btn-primary pull-left" >Show Info</a> <a class="btn btn-success pull-right  " href="/meal/{{$order->id}}/edit">Ready</a></td>


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