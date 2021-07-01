@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section id="about-us-page">
      <div class="container">

      @include('frontend.layouts.menu')

        <div class="about-us-content about-web">
          <h1>about</h1>
          <div class="main-row row">
            <div class="main-left-about col-md-5 col-sm-12">
              <!-- <div class="second-row row">
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/1.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/2.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/3.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/4.jpg')}}" />
                </div>
              </div>
              <div class="second-row row">
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/5.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/6.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/7.jpg')}}" />
                </div>
                <div class="single-image col-md-3">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/8.jpg')}}" />
                </div>
              </div> -->
            </div>
            <div class="main-right-about col-md-7">
              <div class="row">
                <!-- <div class="text-col col-md-9"> -->
                <!-- <p class="font-weight-bold">MMGS ARCHITECTS</p>
                  <p>
                  MMGS ARCHITECTS PVT LTD an award winning architectural practice in Sri Lanka, was established by its principal architect Godridge Samuel.This practice comprises of young and energetic architects,  experimenting with creative solutions for their clients.
                  </p>
                  <p>
                  Over the last two decades, the practice has evolved and developed a distinctive style of it's own. The modern, minimalistic approach to tropical architecture with a focus on sustainability is the hallmark of this practice.
                  </p>
                  <p>
                  Each project is a celebration of innovation, producing a work of joy and is a worthy addition to contemporary Sri Lankan architecture. 
                  </p>
                  <p>
                  MMGS ARCHITECTS provides consortium services with the assistance of well qualified and experienced professionals in allied disciplines.
                  </p>


                  <p class="font-weight-bold">GODRIDGE SAMUEL</p>
                  <p>
                  Born in Colombo in 1962, Mathew Mangaladaz Godridge Samuel (MMGS)  graduated from the University of Moratuwa, Sri Lanka and became a corporate member of the Srilanka Institute of Architects (SLIA) in 1992. He was elected a fellow member of the SLIA in 2003. He excelled in his architectural studies and is the recipient of Geofrey Bawa award for the best comprehensive design project and SLIA award for the highest marks obtained in the MSc final examination in the academic year 1988.
                  </p>
                  <p>
                  He started his practice in his living room with a single draftsman in 1992 and  later registered this practice as MMGS ARCHITECTS in 1998. This has now been established into a medium scale practice having its own office in central colombo.
                  </p>
                  <p>
                  His portfolio includes local and foreign clients, spanning individuals, corporates, institutions and NGOs.
                  </p>
                  <p>
                  He is a member of the Architectural committee of the Diocese of Colombo,Church of Ceylon,serving for almost 3 decades. He served in the SLIA council for more than 10 years, ending his two year term as Hon. Treasurer in 2010/2011. He is presently a student counsellor of SLIA,serving in this capacity for over 20 years. 
                  </p>
                  <p>
                  He has been a recipient of a number of design and colour awards and winner of a few design competitions which makes Godridge Samuel one of the leading, award winning architects in Sri Lanka with a distinctive style of his own ‘MODERN, MINIMALISTIC, TROPICAL, SUSTAINABLE ARCHITECTURE’.
                  </p> -->
                <!-- </div> -->
                <!-- <div class="right-image col-md-3" style="padding: 0">
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/9.jpg')}}" />
                  <img class="gray-image-full-width" src="{{asset('img/assets/team/10.jpg')}}" />
                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="about-us-content about-mobile d-none">
          <br>
          <h1>about</h1>
          <br>
          <!-- <div class="main-row row"> -->

          <div class="main-right-about col-md-12">
              <div class="row">

                <div class="text-col">
                  <!-- <p class="font-weight-bold">MMGS ARCHITECTS</p> -->
                  <!-- <br /> -->
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                  Mathew Mangaladaz Godridge Samuel (MMGS), born in Colombo in 1962, graduated from the University of Moratuwa Sri Lanka. Became corporate member of the Sri Lanka Institute of Architects (SLIA) in 1992. Elected a fellow member of SLIA in 2003.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                  Started his practice in the living room with a single draughtsman in 1992, today the practice is known as MMGS ARCHITECTS having its own design studio in a prime location in Colombo.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                  MMGS ARCHITECTS, an award winning architectural practice in Sri Lanka, comprising young and energetic architects, experimenting with creative solutions for their clients. Each project is a celebration of innovation, work of joy, worthy addition to the contemporary Sri Lankan architecture.
                  </p>
                  <br>
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                  Winning number of design and color awards and a few design competitions makes Godridge Samuel, a leading, award winning architect in Sri Lanka.
                  </p>
                  <br>



                  <!-- <p class="font-weight-bold">GODRIDGE SAMUEL</p>
                  <br /> -->
                  <p class="about-paragraph" style="text-align: justify;font-weight: 300;">
                  Godridge Samuel has evolved a distinctive style of his own ‘MODERN, MINIMALISTIC, TROPICAL, SUSTAINABLE ARCHITECTURE’. 
                  </p>
                </div>
              </div>
            </div>


          <!-- </div> -->
        </div>
    </section>

    @push('after=scripte')
      <script>
        $('body').delay(50).css({'overflow':'visible'});
      </script>
@endpush
@endsection