@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')


<section id="projects-page">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="projects-content">
      <h1 style="margin-top: 20px;margin-bottom: 40px;">projects</h1>

      <main class="main">
        <div class="swiper-container swiper-container1 swiper-web">
          <div class="swiper-wrapper">
            @foreach($projects as $proj)
            <div class="swiper-slide">
              <div class="card-image">
                <img src="{{url('files/'.$proj->feature_images)}}" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}" alt="">
                <!-- <div class="" style="background-image: url('{{url('files/'.$proj->feature_images)}}');height: 500px;background-position:center;background-size: cover;" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}"></div> -->
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

        <div class="swiper-container swiper-container3 swiper-mobile d-none">
          <div class="top-btn" style="padding: 0 0 20px 0;margin: auto;display: flex;justify-content: center;">
            <i class="fa fa-angle-up swiper-button-prev3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
          </div>
          <div class="swiper-wrapper">
            @foreach($projects as $proj)
              <div class="swiper-slide">
              <a href="project_item/{{$proj->id}}"><img src="{{url('files/'.$proj->feature_images)}}" alt="Image Slider" style="width: 100%"></a>  
              </div>
            @endforeach

          </div>
          <div class="top-btn" style="padding: 20px 0 0 0;margin: auto; display: flex; justify-content: center;">
            <i class="fa fa-angle-down swiper-button-next3" aria-hidden="true" style="font-size: 40px; text-align: center"></i>
          </div>
        </div>
      </main>

      <div class="project-bottum-text">
        <h6>“simplicity is the ultimate sophistication”</h6>
        <p>LEONARDO DA VINCI</p>
      </div>
      <br><br><br><br>
    </div>
  </div>






</section>





@endsection