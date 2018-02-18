

@extends('layouts.admin_template')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">



                        @if(count($promotions)>0)

                            <table class="table table-bordered">
                                <th>name</th>
                                <th>percent</th>
                                <th>category</th>
                                <th>price</th>
                                <th></th>
                                <th></th>

                                @foreach($promotions as $promotion)

                                    <tr>
                                        <td>{{$promotion->name}}</td>
                                        <td>{{$promotion->percent}}</td>

                                        <td>
                                            {!!Form::open(['action' => ['PromotionController@destroy', $promotion->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}

                                        </td>
                                        <td>
                                            <a class="btn btn-primary pull-right  " href="/promotion/{{$promotion->id}}/edit">Edit</a>
                                        </td>


                                    </tr>

                                @endforeach

                            </table>

                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="/promotion">
                            {{ csrf_field() }}




                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Promotion name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="percent" class="col-md-4 control-label">Percent</label>

                                <div class="col-md-6">
                                    <input id="percent" type="number" class="form-control" name="percent" value="{{ old('percent') }}" required autofocus>

                                    @if ($errors->has('percent'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('percent') }}</strong>
                                        </span>
                                    @endif
                                </div>




                            </div>




                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


{{--@extends('layouts.layoutDash')--}}

{{--@section('content')--}}


{{--@endsection--}}