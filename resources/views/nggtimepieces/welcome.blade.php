@extends('layouts.mainapp')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($banner as $item)
                @if($loop->first)
                    <div class="item active">
                        <img src="{{ url('img/' . $item->img) }}" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                            <h1 class="text-head">ROLEX WATCHES </h1>
                        
                            <h3>
                                <a href="https://nggtimepieces.com/rolex/" target="_top">
                                    
                                    <button class="cta_rolex btn-size">EXPLORE THE



                                        COLLECTION

                                    </button>

                                </a>

                            </h3>
                        </div>
                    </div>
                @else
                    <div class="item">
                        <img src="{{ url('img/' . $item->img) }}" alt="Chicago" style="width:100%;">
                    </div>
                @endif

            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">


        <div class="agileits_heading_section">
            <br><br>
            <h3 class="wthree_head">WELCOME TO NGG TIMEPIECES CO. LTD.</h3>
            <p class="agileinfo_para">Discover only the best luxury watches and never worry about time. The watches are
                synonym of the technical perfection and timeless aesthetics.
                NGG Timepieces's relationship with the brand has flourished across generations and continues to grow in
                building the network in Thailand and across the region.</p>


            <br><br>


            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('ngg/images/g2.jpg') }}" alt="" width="95%" />
                </div>
                <div class="col-md-6">
                    <br><br>
                    <h4>
                        A luxury wristwatch is something much more than a simple timepiece. It is a piece of art, a true
                        exclusiveness and extreme reliability and accuracy.
                    </h4>


                </div>


            </div>
            <br><br> <br><br>
            <div class="row">
                <div class="col-md-6 ">
                    <br><br><br><br>
                    <h4>
                        A luxury wristwatch is a great way to show your status, your taste, your style. Even in spite of
                        constantly developing technologies, exclusive watches will always be in demand.
                    </h4>


                </div>
                <br><br>
                <div class="col-md-6">

                    <img src="{{ url('ngg/images/g1.jpg') }}" alt="" width="95%" />
                </div>


            </div>
            <br><br> <br><br> <br><br>

            <!-- stats-bottom -->

        </div>

    </div>

    <div class="parallax">
        <h1 class="agileinfo_para">
            LUXURY TIMEPIECES DESTINATION
        </h1>

    </div>
    <div class="container">




        <div class="welcome">
            <div class="agileits_heading_section">
                <h3 class="wthree_head">Service center</h3>

            </div>
            <div class="w3ls_news_grids w3_agileits_team_grids">
                <div class="col-md-6 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <a href="{{ url('i/contact') }}">
                            <img src="{{ url('ngg/images/008.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text agileinfo_about_text">
                                    <ul class="agileits_social_list">

                                        <li>
                                            <h2>watches care</h2>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                    </div>
                    <h4>WATCHES CARE</h4>
                    </a>
                </div>
                <div class="col-md-6 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <a href="{{ url('i/faq') }}">
                            <img src="{{ url('ngg/images/007.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text agileinfo_about_text">
                                    <ul class="agileits_social_list">

                                        <li>
                                            <h2>FAQ</h2>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                    </div>
                    <h4>FAQ</h4>
                    </a>
                </div>
                <div class="col-md-6 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <a href="{{ url('i/contact') }}">
                            <img src="{{ url('ngg/images/003.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text agileinfo_about_text">
                                    <ul class="agileits_social_list">

                                        <li>
                                            <h2>CONTACT US</h2>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                    </div>
                    <h4>CONTACT US</h4>
                    </a>
                </div>
                <div class="col-md-6 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <a href="{{ url('i/duty') }}">
                            <img src="{{ url('ngg/images/006.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text agileinfo_about_text">
                                    <ul class="agileits_social_list">

                                        <li>
                                            <h2>DUTY FREE</h2>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                    </div>
                    <h4>DUTY FREE</h4>
                    </a>

                    <div class="clearfix"> </div>

                </div>

            </div>







        </div>
    </div>
    <a id="popupclose" href="{{ url('css/318029.jpg') }}" style="display:none;"></a>
@endsection
