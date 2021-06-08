@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <section id="home-page-background">
        <div class="home-page-body">
            @include('frontend.includes.nav_desktop')
            <div class="about-us-content about-web" style="padding: 0 10vh">
                <h1 style="font-size: 6vh; margin-top: 0vh">about</h1>
                <div class="main-row row">
                    <div class="main-left-about   col-5"></div>
                    <div class="main-right-about  col-7">
                        <div class="row">
                            <!-- <div class="text-col col-md-9"> -->
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                                Mathew Mangaladaz Godridge Samuel (MMGS), born in Colombo in
                                1962, graduated from the University of Moratuwa Sri Lanka.
                                Became corporate member of the Sri Lanka Institute of
                                Architects (SLIA) in 1992. Elected a fellow member of SLIA in
                                2003.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                                Started his practice in the living room with a single
                                draughtsman in 1992, today the practice is known as MMGS
                                ARCHITECTS having its own design studio in central Colombo.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                                MMGS ARCHITECTS, an award winning architectural practice in
                                Sri Lanka, comprising young and energetic architects,
                                experimenting with creative solutions for their clients. Each
                                project is a celebration of innovation, work of joy, worthy
                                addition to the contemporary Sri Lankan architecture.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                                Winning number of design and color awards and a few design
                                competitions makes Godridge Samuel, a leading, award winning
                                architect in Sri Lanka.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                                Today, Godridge Samuel has evolved a distinctive style of his
                                own ‘MODERN, MINIMALISTIC, TROPICAL, SUSTAINABLE
                                ARCHITECTURE’.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

