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

	<h1 class="content-group text-semibold" style="text-align: center;">
		Return Book
	</h1>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-flat">
				
				<div class="panel-body">

                    <div class="form-group">
                    	<div class="col-md-2">
                    		<h3>Issue Code :</h3>
                    	</div>
                        <div class="col-md-10">
							<select class="select-search">
								<optgroup label="Mountain Time Zone">
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="WY">Wyoming</option>
								</optgroup>
								<optgroup label="Central Time Zone">
									<option value="AL">Alabama</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
								</optgroup>
								<optgroup label="Eastern Time Zone">
									<option value="CT">Connecticut</option>
									<option value="FL">Florida</option>
									<option value="MA">Massachusetts</option>
									<option value="WV">West Virginia</option>
								</optgroup>
							</select>
                        </div>
                    </div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h6 class="form-wizard-title text-semibold">
						<span class="form-wizard-count"></span>
						Student Information
						<small class="display-block">Book details</small>
					</h6>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<label>Select Student</label>
						<select class="select">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>

					<div class="form-group">
                        <label class="col-lg-3">Student Name : </label>
                        <div class="col-lg-7">
                            <label>Student Name</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3">Student Id : </label>
                        <div class="col-lg-7">
                            <label>Student Id</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3">Student Year : </label>
                        <div class="col-lg-7">
                            <label>Student Year</label>
                        </div>
                    </div>

				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h6 class="form-wizard-title text-semibold">
						<span class="form-wizard-count"></span>
						Book Information
						<small class="display-block">Book details</small>
					</h6>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<label>Select Book</label>
						<select class="select">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>

					<div class="form-group">
                        <label class="col-lg-3">Book Name : </label>
                        <div class="col-lg-7">
                            <label>Book Name</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3">Author Name : </label>
                        <div class="col-lg-7">
                            <label>Author Name</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3">Edition : </label>
                        <div class="col-lg-7">
                            <label>Edition</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3">Category : </label>
                        <div class="col-lg-7">
                            <label>Category</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3"></label>
                        <div class="col-lg-7">
                            <a href="" class="btn btn-primary pull-right">Submit</a>
                        </div>
                    </div>

				</div>
			</div>
		</div>
	</div>

    {!! Form::close() !!}

@endsection


