@extends('layouts.master')

@section('content')

    <section id="content">
        <div class="container">
            <div class="row" style="text-align: justify;">

                <h2>{{ $dynamic_page->title }}</h2>
                <p class="lead">
                    <?php
                        echo $dynamic_page->details;
                    ?>
                </p>
            </div><!--/.row-->
            <hr>
            <div style="margin-bottom: 20px;" class="content-pad">
                <div class="item-content">
                    <div style="margin-bottom: 20px;" class="item-meta blog-item-meta pull-right">
                        <span>Central Library, MBSTU <span class="sep">|</span> </span>
                        <span>{{ $dynamic_page->created_at->format('d M - y')}} </span>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#content-->

@endsection

@section('script')
    <script>
        $('#page').addClass('active');
        $('#home').removeClass('active');
    </script>
@endsection
