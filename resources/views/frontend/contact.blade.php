@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<section id="contact-page-section">
      <div class="container">
      @include('frontend.layouts.menu')

        <div class="feature-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2005683378877!2d79.851358699295!3d6.914228790039024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTQnNTAuOSJOIDc5wrA1MScxMi43IkU!5e0!3m2!1sen!2slk!4v1614942274987!5m2!1sen!2slk&ll=6.914254085711335, 79.85221432392696"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
          <div class="details-box-mobile d-none">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
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
                  <p>mmgs@mmgs.lk</p>
                </div>
                <div class="col-md-1 col-sm-1 col-1" style="width: 12px;">
                  <hr/>
                </div>
                <div class="col-md-5 col-sm-5 col-5">
                  <p>
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
                      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="details-box">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
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
                  <p>mmgs@mmgs.lk</p>
                </div>
                <div class="col-md-1">
                  <hr/>
                </div>
                <div class="col-md-5">
                  <p>
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
                      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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