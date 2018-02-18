@extends('layouts.admin_template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <h1>this is a simple User</h1>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}

                            </div>
                        @endif
                            <div id="pop_div"></div>
                            // With Lava class alias
                            <?= Lava::render('AreaChart', 'Population', 'pop_div') ?>

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


{{--@extends('layouts.layoutDash')--}}

{{--@section('content')--}}


{{--@endsection--}}