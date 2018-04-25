@extends('layouts.admin')

@section('title', 'Dynamic Page')

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
                    <a href="">Dynamic Page</a>
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

    {!! Form::open(['url' => route('admin_dynamic_page_edit_post', ['id' => $dynamic_page->page_url]), 'method' => 'post', 'class' => 'form-horizontal form-validate-jquery', 'files' => 'true', 'enctype' => "multipart/form-data"]) !!}

    <!-- Content panel -->
    <div class="panel panel-default border-grey">
        <div class="panel-heading">
            <h6 class="panel-title">Edit Dynamic Page</h6>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <fieldset class="content-group">

                        <!-- Basic text input -->
                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Select Type <span class="text-danger">*</span></label>
                            <div class="col-lg-7">
                                <select id="dynamic_page_id" class="select-search" name="dynamic_page_id">
                                    <option value="">Select Type</option>
                                    <option value="resources" {{ $dynamic_page->page_url == 'resources' ? 'selected' : '' }}>Resources</option>
                                    <option value="facilities" {{ $dynamic_page->page_url == 'facilities' ? 'selected' : '' }}>Facilities</option>
                                    <option value="location" {{ $dynamic_page->page_url == 'location' ? 'selected' : '' }}>Location</option>
                                    <option value="library_catalogue" {{ $dynamic_page->page_url == 'library_catalogue' ? 'selected' : '' }}>Library Catalogue</option>
                                    <option value="policies" {{ $dynamic_page->page_url == 'policies' ? 'selected' : '' }}>Policies</option>
                                    <option value="event" {{ $dynamic_page->page_url == 'acknowledgement' ? 'selected' : '' }}>Acknowledgement</option>
                                </select>
                            </div>
                        </div>
                        <!-- /basic text input -->


                        <!-- Repeat email -->

                        <div class="form-group">
                            <label class="control-label col-lg-2 text-right">Details <span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <textarea class="md-input" id="ckeditor" name="details" required>{{ $dynamic_page->details }}</textarea>
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
    <script>
        $('#dynamic_page_id').on('change',function(){
            var dynamic_page_id = $('#dynamic_page_id option:selected').val();
            var address = "/admin/"+ dynamic_page_id;
            window.location=address;
        });
    </script>
@endsection