@extends('layouts.admin_template')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="{{ asset('css\assetStore\css-modal.css') }}" rel="stylesheet">
        <!-- CUSTOM STYLE -->
        <link href="{{ asset('css\assetStore\style.css') }}" rel="stylesheet">
        <!-- THEME TYPO -->
        <link href="{{ asset('css\assetStore\themetypo.css') }}" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <link href="{{ asset('css\assetStore\bootstrap.css') }}" rel="stylesheet">
        <!-- COLOR FILE -->
        <link href="{{ asset('css\assetStore\color.css') }}" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link href="{{ asset('css\assetStore\font-awesome.min.css') }}" rel="stylesheet">
        <!-- BX SLIDER -->
        <link href="{{ asset('css\assetStore\jquery.bxslider.css') }}" rel="stylesheet">

        <link href="{{ asset('css\assetStore\bootstrap-slider.css') }}" rel="stylesheet">

        <link href="{{ asset('css\assetStore\widget.css') }}" rel="stylesheet">

        <link href="{{ asset('css\assetStore\shortcode.css') }}" rel="stylesheet">

        <link href="{{ asset('css\assetStore\component.css') }}" rel="stylesheet">
        <link href="{{ asset('css\assetStore\responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <!--WRAPPER START-->
    <div class="wrapper">
        <!--HEADER START-->

        <!--HEADER END-->

        <!--CONTENT START-->
        <div class="content">
            <div class="container">
                <div class="content-cover">
                    <div class="row">
                        <!--PAGE CONTENT START-->
                        <div class="col-lg-9">
                            <!--PRODUCT DETAIL START-->
                            <div class="kode-shop-detail">
                                <div class="kode-thumb">
                                    <div class="larg-image">
                                        <a href="#"><img   src="{{asset("storage/$asset->image1")}}"  alt=""></a>
                                    </div>
                                    <div class="shop-thumbnail">
                                        <ul>
                                            <li><a href="#"><img   src="{{asset("storage/$asset->image2")}}"  alt=""></a></li>
                                            <li><a href="#"><img   src="{{asset("storage/$asset->image3")}}"  alt=""></a></li>
                                            <li><a href="#"><img   src="{{asset("storage/$asset->image4")}}"  alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="kode-text">
                                    <div class="header">
                                        <h2>{{$asset->name}}</h2>
                                        <h2 class="price">{{$asset->price}} D</h2>
                                    </div>

                                    <p>{{$asset->description}}</p>
                                    <!--PRODUCT QUANTITY START-->
                                    <div class="product-quantity">
                                        <h5>Quantity:</h5>
                                        <form id='myform' method='POST' action='#'>
                                            <input type='button' value='-' class='qtyminus' field='quantity'>
                                            <input type='text' name='quantity' value='0' class='qty'>
                                            <input type='button' value='+' class='qtyplus' field='quantity'>
                                        </form>
                                        <button  class="btn-filled"><a href="/download/7">Add to Cart</a></button>
                                    </div>
                                    <!--PRODUCT QUANTITY END-->
                                    <!--PRODUCT INFO START-->
                                    <div class="product-info">

                                        <p href="assetStore/"{{$asset->id_Category}}><strong>Category:</strong> {{App\CategoryAsset::where('id',$asset->id_Category)->pluck('name')->first()}}</p>

                                    </div>
                                    <!--PRODUCT INFO END-->

                                </div>
                            </div>
                            <!--PRODUCT DETAIL END-->


                        </div>

                        <!--RIGHT SIDE BAR END-->
                    </div>
                </div>
            </div>

        </div>
        <!--CONTENT END-->
        <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <img src="" class="enlargeImageModalSource" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--WRAPPER END-->


    <script src="{{asset('js\assetStore\js-modal.js')}}"></script>
    <script src="{{asset('js\assetStore\jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js\assetStore\bootstrap.min.js')}}"></script>
    <script src="{{asset('js\assetStore\jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('js\assetStore\bootstrap-slider.js')}}"></script>
    <script src="{{asset('js\assetStore\waypoints.min.js')}}"></script>
    <script src="{{asset('js\assetStore\jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js\assetStore\bg-moving.js')}}"></script>
    <script src="{{asset('js\assetStore\modernizr.custom.js')}}"></script>
    <script src="{{asset('js\assetStore\jquery.dlmenu.js')}}"></script>
    <script src="{{asset('js\assetStore\functions.js')}}"></script>
    </body>

@endsection