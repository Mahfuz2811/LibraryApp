@extends('layouts.admin')

@section('title', 'Home')

@section('page_header')
    <!-- Page header -->
    <div class="page-header page-header-default page-header-xs">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Dashboard</a></li>
                <li class="active">Home</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')
    <!-- Content panel -->
    <div class="panel panel-default border-grey">
        <div class="panel-heading">
            <h6 class="panel-title">Custom panel border</h6>
        </div>

        <div class="panel-body">
            Custom panel border color using <code>.border-*</code> class
        </div>

        <div class="panel-footer">
            <div class="heading-elements">
                <div class="heading-btn pull-right">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /content panel -->
@endsection
