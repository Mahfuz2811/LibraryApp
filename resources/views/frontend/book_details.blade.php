@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="container">
            <div class="row" style="text-align: justify;">


                <div class="col-md-6">
                    <h2>{{ $book->book_name }}</h2>
                    <span>{{ $book->author_name }}</span>
                </div>
                <div class="col-md-6 pull-right">
                    <h2>Total Book: 100 copy</h2>
                </div>
                
            </div><!--/.row-->
            <div class="row" style="text-align: justify;">
                <div style="margin-left: 15px;">
                    <p class="lead">
                        <?php
                        echo $book->details;
                        ?>
                    </p>
                </div>
            </div>
            <hr>
            <div style="margin-bottom: 20px;" class="content-pad">
                <div class="item-content">
                    <div style="margin-bottom: 20px;" class="item-meta blog-item-meta pull-right">
                        <span>Central Library, MBSTU <span class="sep">|</span> </span>
                        <span>{{ $book->created_at->format('d M - y')}} </span>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#content-->
@endsection
