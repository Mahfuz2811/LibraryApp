@extends('layouts.master')

@section('content')

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
             <?php $i = 0; ?>
             @foreach($sliders as $slider)
             @if($i == 0)
                <li data-target="#main-slider" data-slide-to="{{$i}}" class="active"></li>
            @else
                <li data-target="#main-slider" data-slide-to="{{$i}}" class=""></li>
            @endif

            @endforeach
            </ol>
            <div class="carousel-inner">
                 <?php $i = 0; ?>
                @foreach($sliders as $slider)
                @if($i == 0)
                <div class="item active" style="background-image: url({{ url($slider->background_url) }});">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-4">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">{{ $slider->title }}</h1>
                                </div>
                            </div>

                            <div class="col-sm-8 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{ url($slider->photo_url) }}" style="width: 100%; height: 400px;" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                @else
                <div class="item" style="background-image: url({{ url($slider->background_url) }});">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-4">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">{{ $slider->title }}</h1>
                                </div>
                            </div>

                            <div class="col-sm-8 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{ url($slider->photo_url) }}" style="width: 100%; height: 400px;" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                @endif
               <?php $i = $i+1; ?>
                @endforeach
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->s

    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Books</h2>
            </div>

            <div class="row">
                <div class="features">

                    @foreach($books as $book)
                    <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i style="font-size: 25px; height: 60px; width: 60px; line-height: 57px;" class="fa fa-book" aria-hidden="true"></i>
                            <h2><a href="{{ url('book-details/'.$book->id) }}">{{ $book->book_name }}</a></h2>
                            <span>{{ $book->author_name }}</span>
                        </div>
                    </div><!--/.col-md-4-->
                    @endforeach


                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->


    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Latest News</h2>
                        @foreach($notices as $notice)
                        <div style="margin-top: 0px; !important;" class="media testimonial-inner">
                            <div style="margin-bottom: 15px; !important;" class="feature-wrap">
                                <i style="font-size: 25px; height: 60px; width: 60px; line-height: 57px;" class="fa fa-hand-o-right" aria-hidden="true"></i>
                                <h2 style="margin-top: 20px;"><a href="{{ url('notice/'. $notice->id) }}">{{ $notice->title }}</a></h2>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!--/.col-sm-6-->

                <div class="col-sm-5 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Form Downloads</h2>

                        <div class="media-body">
                            <ul>
                                @foreach($forms as $form)
                                <li style="padding: 10px 0px 10px 0px;"> <a href="{{ url('download-form/'.$form->file_name) }}">{{ $form->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div><!--/.col-sm-6-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

@endsection