@extends('layouts.admin_template')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">



                        @if(count($restos)>0)

                            <table class="table table-bordered">
                                <th>bame</th>
                                <th>user</th>
                                <th></th>
                                <th></th>

                                @foreach($restos as $resto)

                                    <tr>
                                        <td>{{$resto->name}}</td>
                                        <td>{{$resto->user->name}}</td>
                                        <td>
                                            {!!Form::open(['action' => ['RestaurantController@destroy', $resto->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}

                                        </td>
                                        <td>
                                            <a class="btn btn-primary pull-right  " href="/restaurant/{{$resto->id}}/edit">Edit</a>
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

                        <form class="form-horizontal" method="POST" action="/restaurant">
                            {{ csrf_field() }}




                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Restaurant name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                                    <label for="user" class="col-md-4 control-label">Select the owner </label>

                                    <div class="col-md-6" >

                                        <select  class="form-control" name="user">
                                            {{$users =App\User::all()}}
                                            <option value="">Select a user here </option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                        </select>

                                        @if ($errors->has('user'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                        @endif
                                    </div>
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