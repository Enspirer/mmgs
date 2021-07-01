<!-- @extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <section id="gallery-page">
        @include('frontend.includes.nav_desktop')
       <div style="padding: 2vh 10vh">
            <div class="gallery-content" style="height: 78vh;">
                <div class="container-gallery">

                    <div class="row gallery-web">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="swiper-container swiper-container4" style="width: 100%;height: 78vh;">
                                <div class="swiper-wrapper" style="width: 100%;height: 78vh;">
                                    @foreach($galleryItems as $items)
                                        <div class="swiper-slide" style="width: 100%;height: 78vh;">
                                            <div class="row">
                                                @foreach($items as $itemS)
                                                    <div class="col-md-4 image" style="" data-toggle="modal" data-target="#exampleModal{{$itemS['image_id']}}">
                                                        @if($itemS['effect'] == 'black_and_white')
                                                            <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="object-fit: cover;height: 24vh; zoom:150%" alt="">

                                                        @else
                                                            <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="object-fit: cover;height: 24vh; zoom:150%" alt="">
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('.image').hover(function(){
                                $(this).children().removeClass('gray');
                            }, function () {
                                $(this).children().addClass('gray');
                            });
                        });
                    </script>

                    <div class="row gallery-mobile d-none">
                        <div class="swiper-container swiper-container3">
                            <div class="top-btn" style="padding: 0 0 20px 0;margin: auto;display: flex;justify-content: center;">
                                <i class="fa fa-angle-up swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row" style="padding: 0 40px;">
                                        <img src="https://source.unsplash.com/1280x720/?nature" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?water" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?girl" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?boy" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?cow" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?bird" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?car" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?van" style="width: 50%;padding: 5px;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="padding: 0 10px;">
                                        <img src="https://source.unsplash.com/1280x720/?nature" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?water" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?girl" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?boy" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?cow" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?bird" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?car" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?van" style="width: 50%;padding: 5px;" alt="">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="padding: 0 10px;">
                                        <img src="https://source.unsplash.com/1280x720/?nature" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?water" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?girl" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?boy" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?cow" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?bird" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?car" style="width: 50%;padding: 5px;" alt="">
                                        <img src="https://source.unsplash.com/1280x720/?van" style="width: 50%;padding: 5px;" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="top-btn" style="padding: 20px 0 0 0;margin: auto;display: flex;justify-content: center;">
                                <i class="fa fa-angle-down swiper-button-next3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








@endsection
 -->
