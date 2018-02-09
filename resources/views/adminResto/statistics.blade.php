@extends('layouts.admin_template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chart 1</div>

                    <div class="panel-body">

                        <div id="pop_div"></div>

                        <?= Lava::render('AreaChart', 'Population', 'pop_div') ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chart 2</div>

                    <div class="panel-body">

                        <div id="poll_div"></div>
                        <?= Lava::render('BarChart', 'Votes', 'poll_div') ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chart 3 </div>

                    <div class="panel-body">


                        <div id="perf_div"></div>
                        @columnchart('Finances', 'perf_div')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--@extends('layouts.layoutDash')--}}

{{--@section('content')--}}


{{--@endsection--}}