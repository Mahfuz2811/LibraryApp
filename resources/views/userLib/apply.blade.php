@extends('layouts.user.user-master')

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
								<label>Select Book(Maximum 3)</label>
								<select multiple="multiple" class="select" data-placeholder="Select Book...">
									<optgroup label="CAtegory1">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
									</optgroup>
									<optgroup label="Category2">
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</optgroup>
									<optgroup label="Category3">
										<option value="CT">Connecticut</option>
										<option value="FL">Florida</option>
										<option value="MA">Massachusetts</option>
										<option value="WV">West Virginia</option>
									</optgroup>
								</select>
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


