@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

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
                                                    <div class="col-md-4" style="" data-toggle="modal" data-target="#exampleModal{{$itemS['image_id']}}">
                                                        @if($itemS['effect'] == 'black_and_white')
                                                            <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="height: 20vh;object-fit: cover;" alt="">
                                                        <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain;filter: grayscale(1)"></div> -->
                                                        @else
                                                            <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="height: 25vh;object-fit: cover;" alt="">
                                                        <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain"></div> -->
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- <div class="row">
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?nature" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?water" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?animal" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?travel" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?flower" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?car" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?mountain" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?nature,water,animal" alt=""></div>
                              <div class="col-md-4"><img src="https://source.unsplash.com/1280x720/?water,animal" alt=""></div>
                            </div> -->

                        </div>
                    </div>

                @foreach($galleryItems as $items)
                    @foreach($items as $itemS)
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$itemS['image_id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="width: 950px;max-width: none;margin-left: 42vh;margin-right: 42vh;margin-top: 2vh;margin-bottom: 2vh;">
                                    <div class="modal-content">
                                        <img src="{{url('files/'.$itemS['image_name'])}}" alt="" style="height: 77vh;object-fit: cover;width: 100%">
                                    <!-- <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 600px;background-size: contain;background-position: center;"> -->
                                    </div>

                                </div>
                            </div>
                </div>
                @endforeach
                @endforeach



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

