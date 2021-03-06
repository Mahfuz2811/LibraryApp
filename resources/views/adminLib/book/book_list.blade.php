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

                        <table class="table datatable-sorting">
							<thead>
								<tr>
									<th>Book Name</th>
									<th>Author Name</th>
									<th>Total Copy</th>
									<th>ISBN</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Marth</td>
									<td><a href="#">Enright</a></td>
									<td>5</td>
									<td>22 Jun 1972</td>
									<td><span class="label label-success">Active</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Jackelyn</td>
									<td>Weible</td>
									<td>9</td>
									<td>3 Oct 1981</td>
									<td><span class="label label-default">Inactive</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Aura</td>
									<td>Hard</td>
									<td>32</td>
									<td>19 Apr 1969</td>
									<td><span class="label label-danger">Suspended</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Nathalie</td>
									<td><a href="#">Pretty</a></td>
									<td>22</td>
									<td>13 Dec 1977</td>
									<td><span class="label label-info">Pending</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Sharan</td>
									<td>Leland</td>
									<td>33</td>
									<td>30 Dec 1991</td>
									<td><span class="label label-default">Inactive</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Maxine</td>
									<td><a href="#">Woldt</a></td>
									<td>88</td>
									<td>17 Oct 1987</td>
									<td><span class="label label-info">Pending</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Sylvia</td>
									<td><a href="#">Mcgaughy</a></td>
									<td>33</td>
									<td>11 Nov 1983</td>
									<td><span class="label label-danger">Suspended</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Lizzee</td>
									<td><a href="#">Goodlow</a></td>
									<td>Technical Services Librarian</td>
									<td>1 Nov 1961</td>
									<td><span class="label label-danger">Suspended</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Kennedy</td>
									<td>Haley</td>
									<td>Senior Marketing Designer</td>
									<td>18 Dec 1960</td>
									<td><span class="label label-success">Active</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Chantal</td>
									<td><a href="#">Nailor</a></td>
									<td>Technical Services Librarian</td>
									<td>10 Jan 1980</td>
									<td><span class="label label-default">Inactive</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Delma</td>
									<td>Bonds</td>
									<td>Lead Brand Manager</td>
									<td>21 Dec 1968</td>
									<td><span class="label label-info">Pending</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Roland</td>
									<td>Salmos</td>
									<td><a href="#">Senior Program Developer</a></td>
									<td>5 Jun 1986</td>
									<td><span class="label label-default">Inactive</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Coy</td>
									<td>Wollard</td>
									<td>Customer Service Operator</td>
									<td>12 Oct 1982</td>
									<td><span class="label label-success">Active</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Maxwell</td>
									<td>Maben</td>
									<td>Regional Representative</td>
									<td>25 Feb 1988</td>
									<td><span class="label label-danger">Suspended</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Cicely</td>
									<td>Sigler</td>
									<td><a href="#">Senior Research Officer</a></td>
									<td>15 Mar 1960</td>
									<td><span class="label label-info">Pending</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"> View</a></li>
													<li><a href="#"> Edit</a></li>
													<li><a href="#"> Delete</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>

                    </div>
                </div>
            </div>
        </div>
        <!-- /content panel -->

    {!! Form::close() !!}

@endsection


