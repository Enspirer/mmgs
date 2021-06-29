@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <style>
        body {
            height: 100%;
            overflow-y: auto;
        }
    </style>

    <section id="home-page-background">
        <div class="home-page-body">
            @include('frontend.includes.nav_desktop')
            <div class="about-us-content about-web" style="padding: 0 10vh">
                <h1 style="font-size: 6vh; color: #d3c441; margin-top: 0vh;font-family: Candara;line-height: 1;">about</h1>
                <div class="main-row row">
                    <div class="main-left-about   col-5"></div>
                    <div class="main-right-about  col-7">
                        <div class="row">
                            <!-- <div class="text-col col-md-9"> -->
                            <p style="font-size: 2.2vh !important; font-weight:600;">MMGS ARCHITECTS</p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            MMGS ARCHITECTS PVT LTD an award winning architectural practice in Sri Lanka, was established by its principal architect Godridge Samuel.This practice comprises of young and energetic architects,  experimenting with creative solutions for their clients.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            Over the last two decades, the practice has evolved and developed a distinctive style of it's own. The modern, minimalistic approach to tropical architecture with a focus on sustainability is the hallmark of this practice.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            Each project is a celebration of innovation, producing a work of joy and is a worthy addition to contemporary Sri Lankan architecture. 
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            MMGS ARCHITECTS provides consortium services with the assistance of well qualified and experienced professionals in allied disciplines.
                            </p>

                            <p style="font-size: 2.2vh !important; font-weight:600;">GODRIDGE SAMUEL</p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            Born in Colombo in 1962, Mathew Mangaladaz Godridge Samuel (MMGS)  graduated from the University of Moratuwa, Sri Lanka and became a corporate member of the Srilanka Institute of Architects (SLIA) in 1992. He was elected a fellow member of the SLIA in 2003. He excelled in his architectural studies and is the recipient of Geofrey Bawa award for the best comprehensive design project and SLIA award for the highest marks obtained in the MSc final examination in the academic year 1988.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            He started his practice in his living room with a single draftsman in 1992 and  later registered this practice as MMGS ARCHITECTS in 1998. This has now been established into a medium scale practice having its own office in central colombo.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            His portfolio includes local and foreign clients, spanning individuals, corporates, institutions and NGOs.
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            He is a member of the Architectural committee of the Diocese of Colombo,Church of Ceylon,serving for almost 3 decades. He served in the SLIA council for more than 10 years, ending his two year term as Hon. Treasurer in 2010/2011. He is presently a student counsellor of SLIA,serving in this capacity for over 20 years. 
                            </p>
                            <p style="font-size: 2.2vh !important;    margin-bottom: 3vh !important;">
                            He has been a recipient of a number of design and colour awards and winner of a few design competitions which makes Godridge Samuel one of the leading, award winning architects in Sri Lanka with a distinctive style of his own ‘MODERN, MINIMALISTIC, TROPICAL, SUSTAINABLE ARCHITECTURE’.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

