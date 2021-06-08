@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section id="home-page-background">
    <div class="home-page-body">
        @include('frontend.includes.nav_desktop')
        <div class="row m-0" style="padding-left: 10vh;">
            <img class="homepagefullimage" src="{{url('desktop_res/assets/01HOMEFINALtext.jpg')}}" style=" width: 35%;height: fit-content; margin-top: 13%;" alt=""/>
            <img class="homepagefullimage" src="{{url('desktop_res/assets/01HOMEFINALimg.png')}}" style="width: 63%;margin-left: auto;" alt=""/>
        </div>
        <div class="home-page-text" id="home-page-text">
            <p class="web-p d-none">
                architecture is my <span>PASSION;</span> <br />
                not just my profession.
            </p>
        </div>
    </div>
</section>

@endsection

