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
                <li class="active">
                    <a>Slider</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
@endsection

@section('content')
    <!-- Content panel -->
    <div class="panel panel-default border-grey">
        <div class="panel-heading">
            <h3 style="text-align: center;" class="panel-title">Slider List</h3>
        </div>

        <table class="table datatable-pagination">
            <thead>
            <tr>
                <th>#</th>
                <th>Background Image</th>
                <th>Slider Image</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            @foreach($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><img style="height: 200px; width: 400px;" src="{{ url($slider->background_url) }}" alt=""></td>
                    <td><img style="height: 200px; width: 400px;" src="{{ url($slider->photo_url) }}" alt=""></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('admin_slider_edit', ['id' => $slider->id]) }}"><i class="icon-compose"></i> Edit</a></li>
                                    <li><a href="{{ route('admin_slider_delete', ['id' => $slider->id]) }}"><i class="icon-close2"></i> Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /content panel -->
@endsection