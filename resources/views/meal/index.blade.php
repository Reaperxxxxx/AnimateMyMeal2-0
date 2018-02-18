

@extends('layouts.admin_template')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">



                        @if(count($meals)>0)

                            <table class="table table-bordered">
                                <th>name</th>
                                <th>description</th>
                                <th>category</th>
                                <th>price</th>
                                <th></th>
                                <th></th>

                                @foreach($meals as $meal)

                                    <tr>
                                        <td>{{$meal->name}}</td>
                                        <td>{{$meal->description}}</td>
                                        <td>{{App\Category::where('id',$meal->id_category)->pluck('name')->first()}}</td>
                                        <td>{{$meal->price}}</td>
                                        <td>
                                            {!!Form::open(['action' => ['MealController@destroy', $meal->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}

                                        </td>
                                        <td>
                                            <a class="btn btn-primary pull-right  " href="/meal/{{$meal->id}}/edit">Edit</a>
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

                        <form class="form-horizontal" method="POST" action="/meal">
                            {{ csrf_field() }}




                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Meal name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <label for="name" class="col-md-4 control-label">Meal price</label>

                                <div class="col-md-6">

                                    <input id="price" type="number"  value="25.00" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                    <label for="user" class="col-md-4 control-label">Category </label>

                                    <div class="col-md-6" >

                                        <select  class="form-control" name="category">
                                            {{$Categories =App\Category::all()}}
                                            <option value="">Select a category</option>
                                            @foreach($Categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('category'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
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