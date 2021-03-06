@extends('layouts.admin')

@section('title', 'Member')

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
                    <a href="">Member</a>
                </li>
                <li class="active">
                    <a>Edit</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')

    {!! Form::open(['url' => route('admin_administration_edit_post', ['id' => $member->id]), 'method' => 'post', 'class' => 'form-horizontal form-validate-jquery', 'files' => 'true', 'enctype' => "multipart/form-data"]) !!}

    <!-- Content panel -->
    <div class="panel panel-default border-grey">
        <div class="panel-heading">
            <h6 class="panel-title">Edit Member</h6>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <fieldset class="content-group">

                        <!-- Basic text input -->
                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Select Designation <span class="text-danger">*</span></label>
                            <div class="col-lg-7">
                                <select class="select-search" name="member_type">
                                    <option value="">Select Member Type</option>
                                    <option value="Chairman"{{ $member->member_type == "Chairman" ? 'selected' : '' }} >Chairman</option>
                                    <option value="Member" {{ $member->member_type == "Member" ? 'selected' : '' }}>Member</option>
                                    <option value="Member Secretary" {{ $member->member_type == "Member Secretary" ? 'selected' : '' }}>Member Secretary</option>
                                </select>
                            </div>
                        </div>
                        <!-- /basic text input -->


                        <!-- Repeat email -->
                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Full Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="name" value="{{ $member->name }}" class="form-control" required="required" placeholder="Enter Full name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Designation <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="designation" value="{{ $member->designation }}" class="form-control" required="required" placeholder="Enter Designation">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Image <span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <input type="file" name="file">

                                @if($member->photo_url != "")
                                    <img style="height: 200px; width: 300px;" src="{{ url($member->photo_url) }}" alt="">
                                @else
                                    <img src="" alt="Default Image">
                                @endif
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