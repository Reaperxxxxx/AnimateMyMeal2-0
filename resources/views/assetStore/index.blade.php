
@extends('layouts.admin_template')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">



                        @if(count($assets)>0)

                            <table class="table table-bordered">
                                <th>name</th>
                                <th>description</th>
                                <th>user</th>
                                <th>price</th>
                                <th></th>
                                <th></th>
                                <th></th>

                                @foreach($assets as $asset)

                                    <tr>
                                        <td>{{$asset->name}}</td>
                                        <td>{{$asset->description}}</td>
                                        <td>{{App\User::where('id',$asset->id_User)->pluck('name')->first()}}</td>
                                        <td>{{$asset->price}}</td>
                                        <td>
                                            <a class="" href="/asset/{{$asset->id}}">more..</a>
                                        </td>
                                        <td>
                                            {!!Form::open(['action' => ['AssetStoreController@destroy', $asset->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}

                                        </td>
                                        <td>
                                            <a class="btn btn-primary pull-right  " href="/asset/{{$asset->id}}/edit">Edit</a>
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

                        <form class="form-horizontal" method="POST" action="/asset" enctype="multipart/form-data">
                            {{ csrf_field() }}




                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">asset name</label>

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

                                <label for="asset_link" class="col-md-4 control-label">Asset to Dowload </label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="asset_link"  id="asset_link" >

                                    @if ($errors->has('asset_link'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('asset_link') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <label for="asset_link" class="col-md-4 control-label">Image </label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="image1"  id="image1" >
                                </div>

                                <label for="asset_link" class="col-md-4 control-label">Image 2 </label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="image2"  id="image2" >
                                </div>
                                <label for="asset_link" class="col-md-4 control-label">Image 3</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="image3"  id="image3" >
                                </div>
                                <label for="asset_link" class="col-md-4 control-label">Image 4 </label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="image4"  id="image4" >
                                </div>

                                <label for="name" class="col-md-4 control-label">asset price</label>

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
                                            {{$Categories =App\CategoryAsset::all()}}
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