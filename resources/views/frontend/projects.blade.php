@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section id="projects-page">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="projects-content">
      <h1>projects</h1>

      <main class="main">
        <div class="swiper-container swiper-container1 swiper-web">
          <div class="swiper-wrapper">
            @foreach($projects as $proj)
            <div class="swiper-slide">
              <div class="card-image">
                <div class="" style="background-image: url('{{url('files/'.$proj->feature_images)}}');height: 600px;background-position:center;background-size: cover;" data-toggle="modal" data-target="#exampleModalCenter{{$proj->id}}"></div>
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
            <div class="swiper-slide">
              <img src="" alt="Image Slider" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/1280x720/?nature,water,animal" alt="Image Slider" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/1280x720/?water,animal" alt="Image Slider" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="https://source.unsplash.com/1280x720/?nature,animal" alt="Image Slider" style="width: 100%">
            </div>
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
    </div>
  </div>
</section>



@foreach($projects as $proj)
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter{{$proj->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
    <div class="modal-content">
      <div class="">
        <div class="wrap-modal-slider" style="padding-left: 0px;padding-right: 0px;">
          <div class="your-class">
            @foreach(json_decode($proj->images) as $prject_img)
            <div>
              <div class="" style="background-image: url('{{file_manager_get_url($prject_img)}}');height: 700px;background-size: cover; background-repeat: no-repeat;"></div>
            </div>
            @endforeach
          </div>
          <div class="dark-layer" style="padding: 20px;">
            <div class="b-text">
              <div class="row b-text-row">
                <div class="col-md-11">
                  <p>
                    <span class="title-project">{{$proj->project_name}}</span><br />
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots">... <span onclick="myFunction()" id="myBtn" class="btn-read-more">Read more</span> </span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est,
                      ultrices nec congue eget, auctor vitae massa. Fusce luctus
                      vestibulum augue ut aliquet. Nunc sagittis dictum nisi,
                      sed ullamcorper ipsum dignissim ac. In at libero sed nunc
                      venenatis imperdiet sed ornare turpis. Donec vitae dui
                      eget tellus gravida venenatis. Integer fringilla congue
                      eros non fermentum. Sed dapibus pulvinar nibh tempor
                      porta.<span onclick="myFunction()" id="myBtn" class="btn-read-more"> &nbsp; Read Less</span></span>
                    <!-- {{$proj->description}} -->
                    <!-- @if(strlen($proj->description) > 150)
                    {{ substr($proj->description, 0, 150)}}
                    <span onclick="myFunction()" id="myBtn" class="btn-read-more"> &nbsp; Read Less</span></span>
                    {{$proj->description}}

                    <span onclick="myFunction()" id="myBtn" class="btn-read-more"> &nbsp; Read Less</span></span>
                    @else

                    @endif -->




                  </p>
                </div>
                <div class="col-md-1">
                  <i class="fa fa-times" aria-hidden="true" data-dismiss="modal"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach



<!-- Modal -->
{{--<div class="modal-project-center modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--<div class="modal-content" style="width: 90%; background: transparent; border: none">--}}
{{--<div class="swiper-container swiper-container2">--}}
{{--<div class="swiper-wrapper">--}}
{{--<div class="swiper-slide">--}}
{{--<img src="https://source.unsplash.com/1280x720/?water" alt="Image Slider" style="width: 100%">--}}
{{--<div class="dark-layer"></div>--}}

{{--<!-- <div class="b-text">--}}
{{--<div class="row b-text-row">--}}
{{--<div class="col-md-11">--}}
{{--<p>--}}
{{--Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
{{--Exercitationem accusantium reprehenderit libero--}}
{{--obcaecati veniam nisi quaerat reiciendis ipsam ratione--}}
{{--dolorum officiis earum tempora rerum cupiditate--}}
{{--pariatur, quo in deleniti excepturi.--}}
{{--</p>--}}
{{--</div>--}}
{{--<div class="col-md-1">--}}
{{--<i--}}
{{--class="fa fa-times"--}}
{{--aria-hidden="true"--}}
{{--data-dismiss="modal"--}}
{{--></i>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div> -->--}}
{{--</div>--}}

{{--<div class="swiper-slide">--}}
{{--<img src="https://source.unsplash.com/1280x720/?girl" alt="Image Slider" style="width: 100%">--}}
{{--<div class="dark-layer"></div>--}}

{{--<!-- <div class="b-text">--}}
{{--<div class="row b-text-row">--}}
{{--<div class="col-md-11">--}}
{{--<p>--}}
{{--Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
{{--Exercitationem accusantium reprehenderit libero--}}
{{--obcaecati veniam nisi quaerat reiciendis ipsam ratione--}}
{{--dolorum officiis earum tempora rerum cupiditate--}}
{{--pariatur, quo in deleniti excepturi.--}}
{{--</p>--}}
{{--</div>--}}
{{--<div class="col-md-1">--}}
{{--<i--}}
{{--class="fa fa-times"--}}
{{--aria-hidden="true"--}}
{{--data-dismiss="modal"--}}
{{--></i>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div> -->--}}
{{--</div>--}}
{{--</div>--}}



{{--<!-- <div class="button-group" style="width: 100px;height: 100px;background: #000;position: absolute;top: 10px;z-index: 999;    top: calc(50% - 50px);"></div> -->--}}
{{--<!-- <div class="button-group" style="width: 100px;height: 100px;background: #000;position: absolute;top: 10px;z-index: 999;    top: calc(50% - 50px);right: 0;"></div> -->--}}
{{--<!-- <div class="swiper-pagination"></div> -->--}}
{{--<!-- Add Arrows -->--}}
{{--</div>--}}
{{--<div id="swiper-button-next2" class="swiper-button-next swiper-button-next2"></div>--}}
{{--<div id="swiper-button-prev2" class="swiper-button-prev swiper-button-prev2"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}


@endsection