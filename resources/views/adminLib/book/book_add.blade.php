@extends('layouts.adminLib.admin-lib')

@section('title', 'Student')

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
                    <a href="">Book</a>
                </li>
                <li class="active">
                    <a>Add</a>
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
                <h6 class="panel-title">Add Book</h6>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                        <fieldset class="content-group">

                            <div class="form-group">
                                <label class="control-label col-lg-3 text-right">Book Name <span class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" name="student_name" value="{{ old('student_name') }}" class="form-control" placeholder="Enter Book Name">
                                    @if($errors->has('student_name'))
                                        <p class="text-danger-600 mt-5"> {{ $errors->first('student_name') }}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-3 text-right">Author Name <span class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" name="student_name" value="{{ old('student_name') }}" class="form-control" placeholder="Enter Author Name">
                                    @if($errors->has('student_name'))
                                        <p class="text-danger-600 mt-5"> {{ $errors->first('student_name') }}</p>
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


