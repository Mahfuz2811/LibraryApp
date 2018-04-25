@extends('layouts.master')

@section('content')

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Administration</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Acquisition</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Reading</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Rental</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Reprography</a></li>
                                    <li class=""><a href="#tab6" data-toggle="tab" class="tehnical">Circulation </a></li>
                                    <li class=""><a href="#tab7" data-toggle="tab" class="tehnical">Computer </a></li>
                                    <li class=""><a href="#tab8" data-toggle="tab" class="tehnical">Processing </a></li>
                                    <li class=""><a href="#tab9" data-toggle="tab" class="tehnical">Reference </a></li>
                                </ul>
                            </div>

                            <?php

                                $helper = new \App\Lib\Helpers;
                            ?>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Administration') as $member)
                                                    <div class="col-md-6" style="padding: 6px;">
                                                        <div class="media">
                                                            <div class="pull-left">
                                                                @if($member->photo_url != "")
                                                                    <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                @else
                                                                    <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                @endif
                                                            </div>

                                                            <div class="media-body">
                                                                <h4>{{ $member->name }}</h4>
                                                                <h5>{{ $member->designation }}</h5>
                                                                @if($member->email != "")
                                                                    <h5>{{ $member->email }}</h5>
                                                                @endif
                                                                @if($member->phone != "")
                                                                    <h5>{{ $member->phone }}</h5>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Acquisition') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Reading') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Rental') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Reprography') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab6">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Circulation') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab7">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Computer') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab8">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Processing') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab9">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row clearfix">
                                                    @foreach($helper->getMembers('Reference') as $member)
                                                        <div class="col-md-6" style="padding: 6px;">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    @if($member->photo_url != "")
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url($member->photo_url) }}" alt=""></a>
                                                                    @else
                                                                        <a href=""><img style="height: 145px; width: 137px;" class="media-object" src="{{ url('frontend/images/profile.png') }}" alt="No image"></a>
                                                                    @endif
                                                                </div>

                                                                <div class="media-body">
                                                                    <h4>{{ $member->name }}</h4>
                                                                    <h5>{{ $member->designation }}</h5>
                                                                    @if($member->email != "")
                                                                        <h5>{{ $member->email }}</h5>
                                                                    @endif
                                                                    @if($member->phone != "")
                                                                        <h5>{{ $member->phone }}</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!--/.tab-content-->
                            </div> <!--/.media-body-->
                        </div> <!--/.media-->
                    </div><!--/.tab-wrap-->
                </div><!--/.col-sm-6-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

@endsection

@section('script')
    <script>
        $('#member').addClass('active');
        $('#home').removeClass('active');
    </script>
@endsection
