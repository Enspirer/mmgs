@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <section id="home-page-background">
        <div class="home-page-body">
            @include('frontend.includes.nav_desktop')
            <section id="projects-page">
                <div class="home-page-body">
                    <div class="projects-content" style="padding: 0vh 10vh;">
                        <h1 style="font-size: 6vh; margin-top: 0vh">projects</h1>
                        <main class="main" style="margin-top: 3vh;">
                            <div class="swiper-container swiper-container1 swiper-web" style="height: 53vh;">
                                <div class="swiper-wrapper">
                                    @foreach($projects as $proj)
                                        <div class="swiper-slide">
                                            <div class="card-image">
                                                <img style="height: 53vh;" src="{{url('files/'.$proj->feature_images)}}" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}" alt="">
                                            <!-- <div class="" style="background-image: url('{{url('files/'.$proj->feature_images)}}');height: 500px;background-position:center;background-size: cover;" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}"></div> -->
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

            @foreach($projects as $projt)

                <div class="modal-project-center modal fade bd-example-modal-lg" id="exampleModalCenter{{$projt->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="wrap-modal-slider">
                                <div class="your-class">
                                    @if($projt->images == 'null')

                                    @else
                                        @foreach(json_decode($projt->images) as $prject_img)
                                            <div>
                                                <img src="{{file_manager_get_url($prject_img)}}" class="modal-image-project" style="height: 80vh"  alt="">
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="dark-layer" style="width: 100%;height: 21vh;">
                                    <div class="b-text">
                                        <div class="row b-text-row">
                                            <div class="col-md-11">
                                                <p style="font-size: 1vh;padding: 2vh;margin-bottom: 1vh;">
                                                    <span class="title-project" style="font-size: 4vh;">{{$projt->project_name}}</span><br />
                                                    <br>
                                                <!-- {{$projt->description}} -->
                                                    @if(strlen($projt->description) > 200)
                                                        <span id="short-text" style="font-size: 3vh;"> {{ substr($projt->description, 0, 200)}}</span>
                                                        <span id="long-text" class="d-none"> {{$projt->description}}</span>
                                                    @else

                                                    @endif
                                                </p>
                                            </div>
                                            <div class="col-md-1">
                                                <i class="fa fa-times" style="font-size: 3vh;" aria-hidden="true" data-dismiss="modal"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

