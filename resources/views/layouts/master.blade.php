<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MBSTU Central Library</title>

    <!-- core CSS -->
    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ url('frontend/css/custom.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ url('frontend/js/html5shiv.js') }}"></script>
    <script src="{{ url('frontend/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body class="homepage">

<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('frontend/images/logo.png') }}" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li id="home" class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li id="member"><a href="{{ url('library-members') }}">Office of The Libririan</a></li>
                    <li id="administration"><a href="{{ url('library-administration') }}">Administration</a></li>
                    <li id="page" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            @foreach($pages as $page)
                                <li><a href="{{ url('page/'.$page->page_url) }}">{{ $page->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

@yield('content')

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                &copy; 2017 Central Library | Mawlana Bhashani Science and Technology University
            </div>
            <div class="col-sm-4">
                <ul class="pull-right">
                    <p><a target="_blank" href="http://proximio.net/">Developed By Proximio</a></p>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="{{ url('frontend/js/jquery.js') }}"></script>
<script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ url('frontend/js/jquery.isotope.min.js') }}"></script>
<script src="{{ url('frontend/js/main.js') }}"></script>
<script src="{{ url('frontend/js/wow.min.js') }}"></script>
@yield('script')
</body>
</html>