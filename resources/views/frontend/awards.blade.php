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
            <section id="awards-section">
                <div style="margin: 0 10vh;">
                    <div class="awards-section">
                        <h1 style="font-size: 6vh; margin-top: 0vh;margin-bottom: 0vh;">awards</h1>
                        <p>
                        </p>
                        <ul style="padding: 0;">
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 1999 Personalized Housing 	- House for Dr.Gamini Wijesinghe at Siebel Avenue, Colombo 06.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2003 Personalized Housing 	- Ranjitha &amp; Pradeepa Jayasekara at Polhengoda, Colombo 05.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2005 Personalized Housing 	- Twin House at Alwis Place, Colombo 03.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Colour Award 2005 Creative Use of Colour - Twin House at Alwis Place, Colombo 03.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                Joint Winner SLIA Houses of the year Award 2008 - Excellence Award - Twin House at Alwis Place, Colombo 03.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2009 Building, Education &amp; Research - Resource Centre Diocese of Colombo, Cathedral Complex, Colombo 07.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Colour Award 2009 Creative Use of Colour - Al Jalal Vidyalayam Sainthamaruthu (Tsunami Project)
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2011 Personalized Housing 	- ‘The Envelope’ for Mr. Ishan De Silva at Pannipitiya
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2013 Personalized Housing 	- House for Mr. Sri Sanjiev at Greenlands Avenue, Colombo 05.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2014 Personalized Housing 	- ‘Urban Envelope’ for Godridge &amp; Beulah Samuel at Alwis Place, Colombo 03.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                Short Listed Candidate for the Inaugural Geoffrey Bawa Design Award 2008 - ‘The Thicket’, Mandawala, Gampaha.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2016 Commercial Building - ‘Beverly Street’ shopping complex, Rajagiriya.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                Short Listed Candidate for the 4th Cycle Geoffrey Bawa Design Award 2016 - "Beverly Street" shopping complex, Rajagiriya.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                SLIA Design Award 2018 Renovations - "Lavan’s Studio" Apartment , Colombo 03.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                Short Listed Candidate for the 5th Cycle Geoffrey Bawa Design Award 2020 - "Lavan’s Studio" Apartment , Colombo 03.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                Winner of Overhead Pedestrian Bridge Kollupitiya - Design Competition conducted by the SLIA in association with Ministry of Defence &amp; Urban Development and Colombo Municipal Council – 2013.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                Winner of Overhead Pedestrian Bridge Bambalapitiya - Design Competition conducted by the SLIA in association with Ministry of Defence &amp; Urban Development and Colombo Municipal Council – 2013.
                            </li>
                            <li style="font-size: 1.8vh;padding: 1vh 2vh;margin: 1vh 0;">
                                3rd Place for Proposed Building for City School of Architecture - Design Competition conducted by the SLIA on behalf of the City School of Architecture - 2019.
                            </li>
                        </ul>



                        <p></p>
                    </div>
                </div>
            </section>
        </div>
    </section>

@endsection

