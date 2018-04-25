<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('admin/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('admin/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('admin/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('admin/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ url('admin/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/core/libraries/bootstrap.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Plugins -->
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/validation/validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/styling/switch.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <!-- /plugins -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ url('admin/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->

    <!-- Custom JS files -->
    <script type="text/javascript" src="{{ url('admin/js/pages/form_validation.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/pages/datatables_basic.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/pages/picker_date.js') }}"></script>

    <!-- Animate.css files -->
    <link rel="stylesheet" href="{{ url('bower_components/animate.css/animate.min.css') }}">
    <!-- /animate.css files -->

    <!-- Sweet Alert files -->
    <link rel="stylesheet" href="{{ url('bower_components/sweetalert2/dist/sweetalert2.min.css') }}">
    <script type="text/javascript" src="{{ url('bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!-- /sweet alert files -->

    @yield('script')

</head>

<body class="navbar-top">

@include('inc.alert')

<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top bg-indigo">

    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('admin/images/logo_light.png') }}" alt="Logo" />
        </a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li>
                <a data-toggle="collapse" data-target="#navbar-mobile">
                    <i class="icon-tree5"></i>
                </a>
            </li>
            <li>
                <a class="sidebar-mobile-main-toggle">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li>
                <a class="sidebar-control sidebar-main-toggle hidden-xs">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ url('admin/images/image.png') }}" alt="">
                    <span>User Name</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li>
                        <a href="{{ route('get_logout') }}" onclick="event.preventDefault(); document.getElementById('admin_logout').submit();">
                            <i class="icon-switch2"></i> Logout
                        </a>
                    </li>

                    {!! Form::open(['url' => route('post_logout'), 'method' => 'post', 'class' => 'form-horizontal form-validate-jquery', 'id' => 'admin_logout']) !!}

                    {!! Form::close() !!}

                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-default">
            <div class="sidebar-content">

                @include('inc.user.sidebar')

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            @yield('page_header')

            <!-- Content area -->
            <div class="content">

                @yield('content')

                @include('inc.admin.footer')

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
<script src="{{ url('admin/js/pages/form_select2.js') }}"></script>
<script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'ckeditor' );
</script>

</body>
</html>
