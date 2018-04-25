@extends('layouts.adminLib.admin-lib')

@section('title', 'Lock System')

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
                <li>
                    <a href="">Lock System</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')

    {!! Form::open(['url' => route('admin_lib_book_store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}

        <!-- Content panel -->
        <div class="panel panel-default border-grey">
            <div class="panel-heading">
                <h6 class="panel-title">Set System Lock</h6>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                        <fieldset class="content-group">

                            <div class="form-group">
                                <label class="control-label col-lg-3 text-right">Lock System <span class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <div class="checkbox checkbox-switch">
										<label>
											<input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="Unlock" data-off-text="Lock" class="switch" checked="checked">
											Unlock/Lock
										</label>
									</div>
                            </div>

                        </fieldset>

                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="heading-elements">
                    <div class="heading-btn pull-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content panel -->

    {!! Form::close() !!}

@endsection


