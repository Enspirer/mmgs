<!-- @extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="gallery-page">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="gallery-content">
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
                    <div class="col-md-4" style="height: 150px;overflow: hidden;padding: 8px 5px;" data-toggle="modal" data-target="#exampleModal{{$itemS['image_id']}}">
                      @if($itemS['effect'] == 'black_and_white')
                      <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="object-fit: cover;" alt="">

                      @else
                      <img src="{{url('files/'.$itemS['image_name'])}}"  class="gray"  style="height: 150px; object-fit: cover;" alt="">

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


        



      <div class="row gallery-mobile d-none">

        <div class="swiper-container swiper-container5">
          <div class="top-btn" style="position:absolute; top:7.5rem; z-index: 999999">
            <i class="fa fa-angle-left swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center;"></i>
          </div>

          <div class="swiper-wrapper">
            @foreach($galleryItems as $items)
            <div class="swiper-slide">
              <div class="row" style="padding: 0 40px;">
                @foreach($items as $itemS)
                @if($itemS['effect'] == 'black_and_white')
                <img src="{{url('files/'.$itemS['image_name'])}}" class="gray" style="width: 50%;padding: 5px;" data-toggle="modal" data-target="#exampleModalM{{$itemS['image_id']}}"  alt="">

                @else
                <img  class="gray"  src="{{url('files/'.$itemS['image_name'])}}" style="width: 50%;padding: 5px;" alt="" data-toggle="modal" data-target="#exampleModalM{{$itemS['image_id']}}">

                @endif
                @endforeach

              </div>
            </div>
            @endforeach
          </div>

          <div class="top-btn" style="position:absolute; bottom: 7.45rem; left: 20.7rem; z-index: 999999">
             <i class="fa fa-angle-right swiper-button-next3" aria-hidden="true" style="font-size: 40px; text-align: center;"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection -->