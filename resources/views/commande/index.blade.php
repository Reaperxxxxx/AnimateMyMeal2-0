@extends('layouts.admin_template')

@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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


    <!--CONTENT START-->
    <div class="content">
        <div class="container">
            <div class="content-cover">
                <div class="row">
                    <!--RIGHT SIDE BAR START-->
                    <div class="col-md- sidebr">
                        <!--SEARCH WIDGET START-->
                        <div class="widget widget-search">
                            <div class="widget-header">
                                <h2>SEARCH</h2>
                            </div>
                            <div class="input-container">
                                <input type="text" placeholder="Enter Keyword">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <!--SEARCH WIDGET END-->
                        <!--CATEGOREIS WIDGET START-->
                        <div class="widget widget-categories">
                            <div class="widget-header">
                                <h2>CATEGOREIS</h2>
                            </div>
                            <ul>
                                <li><a href="#">Corporate identity</a></li>
                                <li><a href="#">Ui/ux design</a></li>
                                <li><a href="#">Wordpress theme</a></li>
                                <li><a href="#">Typography</a></li>

                            </ul>
                        </div>
                        <!--CATEGOREIS WIDGET END-->





                    </div>
                    <!--RIGHT SIDE BAR END-->
                    <!--PAGE CONTENT START-->
                    <div class="col-lg-9">
                        <div class="kode-shop">
                            <ul class="row">


                                <!--PROUCT LIST START-->
                                <li class="col-lg-4">
                                    <div class="kode-product">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" alt=""></a>

                                        </div>
                                        <div class="kode-text">
                                            <h2><a href="#">Day One shopper</a></h2>
                                            <h4><a href="#">Breast Cancer Compain</a></h4>
                                            <p class="price">$521</p>
                                            <a href="#" class="btn-filled cart">Add To Cart</a>
                                            <a href="#" class="btn-filled view">View</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4">
                                    <div class="kode-product">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" alt=""></a>

                                        </div>
                                        <div class="kode-text">
                                            <h2><a href="#">Day One shopper</a></h2>
                                            <h4><a href="#">Breast Cancer Compain</a></h4>
                                            <p class="price">$521</p>
                                            <a href="#" class="btn-filled cart">Add To Cart</a>
                                            <a href="#" class="btn-filled view">View</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4">
                                    <div class="kode-product">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" alt=""></a>

                                        </div>
                                        <div class="kode-text">
                                            <h2><a href="#">Day One shopper</a></h2>
                                            <h4><a href="#">Breast Cancer Compain</a></h4>
                                            <p class="price">$521</p>
                                            <a href="#" class="btn-filled cart">Add To Cart</a>
                                            <a href="#" class="btn-filled view">View</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4">
                                    <div class="kode-product">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" alt=""></a>

                                        </div>
                                        <div class="kode-text">
                                            <h2><a href="#">Day One shopper</a></h2>
                                            <h4><a href="#">Breast Cancer Compain</a></h4>
                                            <p class="price">$521</p>
                                            <a href="#" class="btn-filled cart">Add To Cart</a>
                                            <a href="#" class="btn-filled view">View</a>
                                        </div>
                                    </div>
                                </li> <li class="col-lg-4">
                                    <div class="kode-product">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" alt=""></a>

                                        </div>
                                        <div class="kode-text">
                                            <h2><a href="#">Day One shopper</a></h2>
                                            <h4><a href="#">Breast Cancer Compain</a></h4>
                                            <p class="price">$521</p>
                                            <a href="#" class="btn-filled cart">Add To Cart</a>
                                            <a href="#" class="btn-filled view">View</a>
                                        </div>
                                    </div>
                                </li>

                                <!--PROUCT LIST END-->
                                <!--PROUCT LIST START-->
                                <li class="col-lg-4">
                                    <div class="kode-product">
                                        <div class="kode-thumb">
                                            <a href="#"><img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" alt=""></a>
                                            <div class="rating">
                                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                        </div>
                                        <div class="kode-text">
                                            <h2><a href="#">Pink heart keyring</a></h2>
                                            <h4><a href="#">Breast Cancer Compain</a></h4>
                                            <p class="price">$521</p>
                                            <a href="#" class="btn-filled cart">Add To Cart</a>
                                            <a href="#" class="btn-filled view">View</a>
                                        </div>
                                    </div>
                                </li>
                                <!--PROUCT LIST END-->
                            </ul>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!--PAGINATION END-->
                    </div>
                    <!--PAGE CONTENT END-->

                </div>
            </div>
        </div>

    </div>
    <!--CONTENT END-->

</div>
<!--WRAPPER END-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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