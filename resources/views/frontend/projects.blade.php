@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <link href="{{url('slicker/gh-pages/stylesheets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('slicker/gh-pages/stylesheets/bootstrap-theme.css')}}" rel="stylesheet">
    <link href="{{url('slicker/gh-pages/stylesheets/github-highlight.css')}}" rel="stylesheet">
    <link href="{{url('slicker/gh-pages/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{url('slicker/gh-pages/bower_components/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{url('slicker/dist/slick-lightbox.css')}}" rel="stylesheet">
    <style>
        .thumbnail img { width: 100%; display: block; }
        h2 { margin-top: 30px; }
        .container { max-width: 750px; }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{url('slicker/gh-pages/javascripts/bootstrap.min.js')}}"></script>
    <script src="{{url('slicker/gh-pages/bower_components/slick-carousel/slick/slick.js')}}"></script>
    <script src="{{url('slicker/dist/slick-lightbox.js')}}"></script>

    <style>
        .slider {
            position: absolute;
            left: calc(33.333333% + 30px);
        }

        .slider__item {
            max-width: 290px;
            margin: 0px 15px;
        }
    </style>


    <section id="home-page-background">
        <div class="home-page-body">
            @include('frontend.includes.nav_desktop')
            <section id="projects-page">
                <div class="home-page-body">
                    <div class="projects-content" style="padding: 0vh 10vh;">
                        <h1 style="font-size: 6vh; margin-top: 0vh">projects</h1>
                        <main class="main" style="margin-top: 3vh;">
                           <div class="swiper-slide">
                                    <div id="slick-demo">
                                        @foreach($projects as $key=>$proj)
                                            <div class="acco{{$key}}">

                                            </div>
                                            <div id="main_item{{$key}}" class="item" style="margin-left: 10px">
                                                <img src="{{url('files/'.$proj->feature_images)}}" alt="" width="480" height="300">
                                                @if($proj->images == 'null')

                                                @else
                                                    @foreach(json_decode($proj->images) as $prject_img)
                                                        <div>
                                                            <img src="{{file_manager_get_url($prject_img)}}" class="modal-image-project" style="display: none" >
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>
                                        @endforeach

                                    </div>




                                    <script type="text/javascript">
                                        $('#slick-demo').slick({
                                            infinite: true,
                                            speed: 300,
                                            slidesToShow: 20,
                                            centerMode: true,
                                            variableWidth: true,
                                            arrows: true,
                                        });

                                        @foreach($projects as $key=>$proj)
                                            $('#main_item{{$key}}').slickLightbox({
                                                src: 'src',
                                                itemSelector: 'img'
                                            });
                                        @endforeach
                                    </script>
                           </div>
                        </main>
                        <div class="project-bottum-text">
                            <h6 style="font-weight: 300;font-size: 3.5vh;">“simplicity is the ultimate sophistication”</h6>
                            <p style="font-size: 2.3vh;">LEONARDO DA VINCI</p>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>




            </section>
        </div>




    </section>






@endsection

