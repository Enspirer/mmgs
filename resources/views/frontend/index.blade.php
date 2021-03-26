@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<section id="home-page-background" style="background-image: url('{{asset("img/assets/HOMEPAGEimage.jpg")}}');">
      <div class="container">
       @include('frontend.layouts.menu')

        <div class="home-page-text" id="home-page-text">
          <p class="web-p">
            architecture is my <span>PASSION;</span> <br />
            not just my profession.
          </p>

          <p class="mobile-p" style="display: none;">
            architecture is <br> my <span>PASSION;</span> <br />
            not just my profession.
          </p>
        </div>
      </div>
    </section>


    <section id="home-page-background2"  style="background-image: url('{{asset("img/assets/HOMEPAGEimage2.jpg")}}');background-size: 100%;background-position: bottom !important;">
      <div class="container">
      @include('frontend.layouts.menu')
        <div class="home-page-text" id="home-page-text">
          <p class="web-p">
            architecture is my <span>PASSION;</span> <br />
            not just my profession.
          </p>

          <p class="mobile-p" style="display: none;">
            architecture is <br> my <span>PASSION;</span> <br />
            not just my profession.
          </p>
        </div>
      </div>
    </section>


<!-- <section id="home-page-background" style="background-image: url('{{asset("img/assets/HOMEPAGEimage.jpg")}}')">
    <div class="container">
        

    @include('frontend.layouts.menu')
        <div class="home-page-text" id="home-page-text">
            <p class="web-p">
                architecture is my <span>PASSION;</span> <br />
                not just my profession.
            </p>

            <p class="mobile-p" style="display: none;">
                architecture is <br> my <span>PASSION;</span> <br />
                not just my profession.
            </p>
        </div>
    </div>
</section> -->
@endsection