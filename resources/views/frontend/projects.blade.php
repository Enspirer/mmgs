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
        .slick-lightbox-slick-item-inner img {
            zoom: 150%;
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
                            <div class="swiper-container swiper-container1 swiper-web" >
                                <div class="swiper-wrapper">
                                    @foreach($projects as $key=>$proj)
                                        <div class="swiper-slide">
                                            <div class="card-image" onclick="appendTitle('{{$proj->project_name}}','{{$proj->location}}')" id="main_item{{$key}}">
                                                <img style="height: 53vh;" src="{{url('files/'.$proj->feature_images)}}">

                                                @if($proj->images == 'null')

                                                @else
                                                    @foreach(json_decode($proj->images) as $proj->images)
                                                        <div class="item">
                                                            <!-- <div class="desc" style="display:none"><h3>{{ $proj->project_name }}</h3></div> -->
                                                            <img src="{{file_manager_get_url($proj->images)}}" class="modal-image-project" style="display: none;" >
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination" style="padding-right: 33vh;"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
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

            <script type="text/javascript">
                $('.item').slick({
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
                        itemSelector: 'img',
                        // caption:function(element, info) {
                        //     var span = $(element).parent().find(".desc");
                        //     return span.html(); }
                    });
                @endforeach
            </script>

            <script defer>
                // $(window).on('load', function(){
                //     $('#project_name').click(function(){
                //         alert('dfdsv');
                //     });
                // });

                // $(document).ready(function() {

                //     let title = <?php $proj->project_name; ?>
                //     console.log(title);
                // });

                function appendTitle(title,location) {
                    
                    setTimeout(
                        function()
                        {
                            $('#project_name').html('<span style="color: #b0b0b0;text-align: center;padding-top: 110px;font-weight: 300;font-size: 4.5vh;">' + title + '</span>'+' <span style="color: #b0b0b0;text-align: center;padding-top: 110px;font-weight: 300;font-size: 3.5vh;padding-left: 30px;">' +  location + '</span>' );
                            $('.slick-lightbox-slick-item').css('height','auto !important')
                        }, 1000);
                }

                
            </script>

        </div>
    </section>

@endsection

