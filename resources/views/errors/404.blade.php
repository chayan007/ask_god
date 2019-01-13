<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>404 Error | Ask God</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js')}}"></script>
    <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
</head><!--/head-->

<body>
<section id="error-page">
    <div class="error-page-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="bg-404">
                            <div class="error-image">
                                <img class="img-responsive" src="{{ asset('images/404.png') }}" alt="">
                            </div>
                        </div>
                        <h2>PAGE NOT FOUND</h2>
                        <p>The page you are looking for might have been removed, had its name changed.</p>
                        <a href="index.html" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
                        {{--  <div class="social-link">
                            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
</body>
</html>
