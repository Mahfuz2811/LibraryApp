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
    <script type="text/javascript" src="{{ url('admin/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/validation/validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ url('admin/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->

    <!-- Animate.css files -->
    <link rel="stylesheet" href="{{ url('bower_components/animate.css/animate.min.css') }}">
    <!-- /animate.css files -->

    <!-- Sweet Alert files -->
    <link rel="stylesheet" href="{{ url('bower_components/sweetalert2/dist/sweetalert2.min.css') }}">
    <script type="text/javascript" src="{{ url('bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!-- /sweet alert files -->


</head>

<body class="login-container pace-demo">

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
