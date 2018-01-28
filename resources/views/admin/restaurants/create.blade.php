@extends('layouts.admin_template')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Restaurant</div>

                <div class="panel-body">
                    {!! Form::open(
                        array(
                            'url' => '/restaurant',
                            'class' => 'form-horizontal',
                            'method'=> 'POST',
                            'files' => true)) !!}

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-8">

                            {!! Form::label('name','Name') !!}
                            {!! Form::text('name', old('name'), array('placeholder'=>'Name','class'=>'form-control' )) !!}



                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                           <div class="col-md-8" >
                               {!! Form::label('name','Name') !!}
                                <select  class="form-control" name="user">
                                    {{$users =App\User::all()}}
                                    <option value="">Select a user here </option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('user'))
                                    <span class="hel p-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-8" >

                                {!! Form::label('Restaurant Image') !!}
                                {!! Form::file('image', null,['class'=>'file']) !!}

                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
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
@endsection