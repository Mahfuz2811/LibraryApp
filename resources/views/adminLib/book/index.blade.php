@extends('layouts.adminLib.admin-lib')

@section('title', 'Book')

@section('page_header')
    <!-- Page header -->
    <div class="page-header page-header-default page-header-xs">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li>
                    <a href="">
                        <i class="icon-home2 position-left"></i> Dashboard
                    </a>
                </li>
                <li class="active">
                    <a>Book</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">

            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div class="panel-body" style="text-align: center;">
                    <h2>Registered Student</h2>
                    <h2>3,450</h2>
                </div>

                <div class="container-fluid">
                    <div id="members-online"></div>
                </div>
            </div>
            <!-- /members online -->

        </div>

        <div class="col-lg-4">

            <!-- Current server load -->
            <div class="panel bg-pink-400">
                <div class="panel-body" style="text-align: center;">
                    <h2>Total Book</h2>
                    <h2>3,450</h2>
                </div>

                <div id="server-load"></div>
            </div>
            <!-- /current server load -->

        </div>

        <div class="col-lg-4">

            <!-- Today's revenue -->
            <div class="panel bg-blue-400">
                <div class="panel-body" style="text-align: center;">
                    <h2>Circulation Book</h2>
                    <h2>3,450</h2>
                </div>

                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->

        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div class="panel-body" style="text-align: center;">
                    <h2>Today Circulation</h2>
                    <h2>3,450</h2>
                </div>

                <div class="container-fluid">
                    <div id="members-online"></div>
                </div>
            </div>
            <!-- /members online -->

        </div>

        <div class="col-lg-4">

            <!-- Current server load -->
            <div class="panel bg-pink-400">
                <div class="panel-body" style="text-align: center;">
                    <h2>Today Return</h2>
                    <h2>3,450</h2>
                </div>

                <div id="server-load"></div>
            </div>
            <!-- /current server load -->

        </div>

        <div class="col-lg-4">

            <!-- Today's revenue -->
            <div class="panel bg-blue-400">
                <div class="panel-body" style="text-align: center;">
                    <h2>Overdated Book</h2>
                    <h2>3,450</h2>
                </div>

                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->

        </div>
    </div>
@endsection
