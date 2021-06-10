@extends('frontend.layouts.app_desktop')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <section id="contact-page-section">
        @include('frontend.includes.nav_desktop')

        <div class="" style="margin: 0 10vh">
            <div class="feature-map">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2005683378877!2d79.851358699295!3d6.914228790039024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTQnNTAuOSJOIDc5wrA1MScxMi43IkU!5e0!3m2!1sen!2slk!4v1614942274987!5m2!1sen!2slk&ll=6.914254085711335, 79.85221432392696"
                        width="100%"
                        height="450"
                        style="border: 0; height: 75vh !important"
                        allowfullscreen=""
                        loading="lazy"
                ></iframe>
                <div class="details-box-mobile d-none">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="" style="margin: 0; padding: 0">
                                <p>
                                    MMGS ARCHITECTS (PVT) LTD <br />
                                    26 A, <br />
                                    Alwis Place, <br />
                                    Colombo 00300, <br />
                                    Sri Lanka
                                </p>
                                <p>
                                    +94 11 2345418 <br />
                                    +94 11 2439294
                                </p>
                                <p style="margin: 0">mmgs@mmgs.lk</p>
                            </div>
                            <div
                                    class="colcolcol"
                                    style="width: 12px; margin: 0; padding: 0 20px"
                            >
                                <hr />
                            </div>
                            <div class="coltx" style="padding: 0">
                                <p style="margin-top: 0">
                                    <span>GODRIDGE SAMUEL </span> <br />
                                    +94 77 7766511 <br />
                                    godridge@gmail.com <br />
                                    godridge@mmgs.lk <br />
                                </p>
                                <br />
                                <div class="social-icon">
                                    <div class="row">
                                        <a href="#"
                                        ><i class="fa fa-facebook" aria-hidden="true"></i
                                            ></a>
                                        <a href="#"
                                        ><i class="fa fa-instagram" aria-hidden="true"></i
                                            ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <br /><br />
                    <br /><br />
                    <br /><br />
                </div>
                <div
                        class="details-box"
                        style="
              width: 49vh;
              padding: 5vh 3vh;
              border-radius: 1vh;
              top: 20vh;
              left: 10vh;
            "
                >
                    <div class="row m-0">
                        <div class="col-6" style="padding: 0">
                            <div
                                    class=""
                                    style="border-right: 0.1vh solid #fff; padding-right: 2vh"
                            >
                                <p style="margin: 0; font-size: 1.5vh">
                                    MMGS ARCHITECTS (PVT) LTD <br />
                                    26 A,
                                </p>
                                <p
                                        style="
                      text-align: justify;
                      font-size: 1.5vh;
                      margin-bottom: 2vh;


                    "
                                >
                    <span style="white-space: nowrap; font-weight: 100;letter-spacing: 0.27vh;"
                    >Alwis Place,</span
                    >
                                    <span
                                            style="
                        white-space: nowrap;
                        font-weight: 100;
                        display: block;
                      "
                                    >Colombo 00300,</span
                                    >
                                    <span
                                            style="
                        white-space: nowrap;
                        font-weight: 100;
                        letter-spacing: 0.5vh;
                      "
                                    >Sri Lanka</span
                                    >
                                </p>
                                <p style="font-size: 1.5vh; margin-bottom: 1.4vh">
                                    +94 11 2345418 <br />
                                    +94 11 2439294
                                </p>
                                <p style="margin: 0; font-size: 1.5vh">mmgs@mmgs.lk</p>
                            </div>
                        </div>

                        <div class="col-6" style="padding: 0;margin-top: auto;">
                            <div class="" style="margin-left: 2vh; margin-top: auto">
                                <p style="font-size: 1.5vh; margin: 0">
                                    <span style="letter-spacing: 0.18vh;">GODRIDGE SAMUEL</span>
                                    <span style="display: block; letter-spacing: 0.36vh"
                                    >+94 77 7766511
                    </span>
                                    <span style="display: block;    letter-spacing: 0.1vh;"
                                    >godridge@gmail.com
                    </span>
                                    <span style="    letter-spacing: 0.19vh;">godridge@mmgs.lk </span>
                                </p>

                                <div class="social-icon" style="margin-top: 4vh;">
                                    <div class="row m-0">
                                        <a href="#" style="line-height: 0;"
                                        ><i
                                                    style="
                            color: #fefefe;
                            margin-right: 1.5vh;
                            font-size: 1.5vh;
                          "
                                                    class="fa fa-facebook"
                                                    aria-hidden="true"
                                            ></i
                                            ></a>
                                        <a href="#" style="line-height: 0;"
                                        ><i
                                                    style="color: #fefefe; font-size: 1.5vh"
                                                    class="fa fa-instagram"
                                                    aria-hidden="true"
                                            ></i
                                            ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

