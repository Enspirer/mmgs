@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')


<section id="awards-section">
  <div class="container">
    @include('frontend.layouts.menu')

    <div class="awards-section">
      <h1 style="margin-top: 20px;margin-bottom: 40px;">awards</h1>

      <p>
      <ul>
        {{--@foreach($awardsDetails as $awards)--}}
        {{--<li>--}}
          {{--{{$awards->description}}--}}
        {{--</li>--}}
        {{--@endforeach--}}
            <ul style="padding: 0;">
                <h5 style="font-size:20px;">ACADEMIC</h5>
                <li style="background-color: white">Geoffrey Bawa Award for best comprehensive design project in the MSc Architecture final examination, University of Moratuwa-1988/89</li>
                <li style="background-color: white">Sri Lanka Institute of Architects Award for highest marks obtained in the MSc Architecture final examination, University of Moratuwa-1988/89.</li>
                <h5 style="font-size:20px;">PRACTICE</h5>
                <li style="background-color: white">SLIA Design Award 1999 Personalized Housing 	- House for Dr.Gamini Wijesinghe at Siebel Avenue, Colombo 06.</li>
                <li style="background-color: white">SLIA Design Award 2003 Personalized Housing 	- House for Ranjitha &amp; Pradeepa Jayasekara at Polhengoda, Colombo 05.</li>
                <li style="background-color: white">SLIA Design Award 2005 Personalized Housing 	- ‘Cube House’ for Samuel Family at Alwis Place, Colombo 03.</li>
                <li style="background-color: white">SLIA Colour Award 2005 Creative Use of Colour- ‘Cube House’ for Samuel Family at Alwis Place, Colombo 03.</li>
                <li style="background-color: white">Joint Winner SLIA Houses of the year Award 2008 - Excellence Award – ‘Cube House’ for Samuel Family  at Alwis Place, Colombo 03.</li>
                <li style="background-color: white">Short Listed Candidate for the Inaugural Geoffrey Bawa Design Award 2008 - ‘The Thicket’, Mandawala, Gampaha.</li>
                <li style="background-color: white">SLIA Design Award 2009 Building, Education &amp; Research - Resource Centre Diocese of Colombo,Church of Ceylon at Cathedral Premises, Colombo 07.</li>
                <li style="background-color: white">SLIA Colour Award 2009 Creative Use of Colour - Al Jalal Vidyalayam Sainthamaruthu (Tsunami Project).</li>
                <li style="background-color: white">SLIA Design Award 2011 Personalized Housing 	- ‘The Envelope’ for Ishan De Silva at Pannipitiya</li>
                <li style="background-color: white">SLIA Design Award 2013 Personalized Housing 	- House for Sri Sanjiev at Greenlands Avenue, Colombo 05.</li>
                <li style="background-color: white">SLIA Design Award 2014 Personalized Housing 	- ‘Urban Envelope’ for Godridge &amp; Beulah at Alwis Place, Colombo 03.</li>
                <li style="background-color: white">SLIA Design Award 2016 Commercial Building - ‘Beverly Street’ shopping complex, Rajagiriya.</li>
                <li style="background-color: white">Short Listed Candidate for the 4th Cycle Geoffrey Bawa Design Award 2016 - "Beverly Street" shopping complex, Rajagiriya.</li>
                <li style="background-color: white">SLIA Design Award 2018 Renovations - Lavan’s Studio Apartment , Colombo 03.</li>
                <li style="background-color: white">SLIA Design Award 2019 Personalized Housing- Pia’s Villa , Balapitiya.</li>
                <li style="background-color: white">Short Listed Candidate for the 5th Cycle Geoffrey Bawa Design Award 2020 - "Lavan’s Studio" Apartment , Colombo 03.</li>
                <li style="background-color: white">Winner of Overhead Pedestrian Bridge Kollupitiya - Design Competition conducted by SLIA in association with Ministry of Defence &amp; Urban Development and Colombo Municipal Council – 2013.</li>
                <li style="background-color: white">Winner of Overhead Pedestrian Bridge Bambalapitiya - Design Competition conducted by SLIA in association with Ministry of Defence &amp; Urban Development and Colombo Municipal Council – 2013.</li>
                <li style="background-color: white">3rd Place for Proposed Building for City School of Architecture - Design Competition conducted by SLIA on behalf of the City School of Architecture - 2019.</li>
            </ul>
      </ul>



      </p>
    </div>
  </div>
</section>

@push('after=scripte')
<script>
    $('body').delay(50).css({'overflow':'visible'});
</script>
@endpush

@endsection