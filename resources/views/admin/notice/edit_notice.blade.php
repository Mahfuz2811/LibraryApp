@extends('layouts.admin')

@section('title', 'Notice')

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
                    <a href="">Notice</a>
                </li>
                <li class="active">
                    <a>Create</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')

    {!! Form::open(['url' => route('admin_notice_edit_post', ['id' => $notice->id]), 'method' => 'post', 'class' => 'form-horizontal form-validate-jquery', 'files' => 'true', 'enctype' => "multipart/form-data"]) !!}

    <!-- Content panel -->
    <div class="panel panel-default border-grey">
        <div class="panel-heading">
            <h6 class="panel-title">Edit Notice</h6>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <fieldset class="content-group">

                        <!-- Basic text input -->
                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Select Type <span class="text-danger">*</span></label>
                            <div class="col-lg-7">
                                <select class="select-search" name="type">
                                    <option value="">Select Type</option>
                                    <option value="notice" {{ $notice->type == 'notice' ? 'selected' : '' }}>Notice</option>
                                    <option value="news" {{ $notice->type == 'news' ? 'selected' : '' }}>News</option>
                                    <option value="event" {{ $notice->type == 'event' ? 'selected' : '' }}>Event</option>
                                </select>
                            </div>
                        </div>
                        <!-- /basic text input -->


                        <!-- Repeat email -->
                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Title <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="title" value="{{ $notice->title }}" class="form-control" required="required" placeholder="Enter title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Details <span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <textarea class="md-input" id="ckeditor" name="details" required>{{ $notice->details }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Details <span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="file" name="file">
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

@section('script')
    <script type="text/javascript" src="{{ url('admin/js/pages/form_select2.js')}}"></script>
@endsection