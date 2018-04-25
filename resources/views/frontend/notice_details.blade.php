@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="container">
            <div class="row" style="text-align: justify;">

                <h2>{{ $notice->title }}</h2>
                <p class="lead">
                    <?php
                        echo $notice->details;
                    ?>
                </p>
                @if($notice->file_url != '')
                <a href="{{ url('download-notice/'.$notice->file_name) }}" class="btn btn-primary">Download Attachment</a>
                @endif
            </div><!--/.row-->
            <hr>
            <div style="margin-bottom: 20px;" class="content-pad">
                <div class="item-content">
                    <div style="margin-bottom: 20px;" class="item-meta blog-item-meta pull-right">
                        <span>Central Library, MBSTU <span class="sep">|</span> </span>
                        <span>{{ $notice->created_at->format('d M - y')}} </span>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#content-->
@endsection