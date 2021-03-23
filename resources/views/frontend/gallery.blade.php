@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="gallery-page">
      <div class="container">
      @include('frontend.layouts.menu')

        <div class="gallery-content" style="height: 500px;">
          <div class="container">
         
            <div class="row gallery-web">
              <div class="col-md-3"></div>
              <div class="col-md-9">
                <div class="swiper-container swiper-container4" style="width: 100%;height: 500px;">
                  <div class="swiper-wrapper" style="width: 100%;height: 500px;">
                      @foreach($galleryItems as $items)
                        <div class="swiper-slide" style="width: 100%;height: 500px;">
                              <div class="row">
                                  @foreach($items as $itemS)

                                      <div class="col-md-4"  data-toggle="modal" data-target="#exampleModal{{$itemS['image_id']}}">
                                          <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 150px;background-position: center;background-size: contain"></div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      @endforeach
                  </div>
                
                  <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>


          @foreach($galleryItems as $items)
              @foreach($items as $itemS)
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$itemS['image_id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="width: 950px;max-width: none;">
                      <div class="modal-content">
                          <div class="" style="background-image: url('{{url('files/'.$itemS['image_name'])}}');height: 600px;background-size: contain;background-position: center;">
                          </div>

                      </div>
                  </div>
              </div>
              @endforeach
           @endforeach




            <div class="row gallery-mobile d-none">
              <div class="swiper-container swiper-container5">
              <div class="top-btn" style="
                  padding: 0 0 20px 0;
                  margin: auto;
                  display: flex;
                  justify-content: center;
                ">
                <i class="fa fa-angle-up swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
              </div>
              <div class="swiper-wrapper">
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
  
              <div
                class="top-btn"
                style="
                  padding: 20px 0 0 0;
                  margin: auto;
                  display: flex;
                  justify-content: center;
                ">
                <i
                  class="fa fa-angle-down swiper-button-next3"
                  aria-hidden="true"
                  style="font-size: 40px; text-align: center"></i>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection