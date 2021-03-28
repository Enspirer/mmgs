<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/assets/mmgs sm.png')}}" alt="" /></a>
            <div class="navbar-toggler" type="button">
            <input type="checkbox" id="overlay-input" />
            <label for="overlay-input" id="overlay-button"><span></span></label>
            <!-- <span class="navbar-toggler-icon"></span> -->
            <div id="overlay">
              <ul>
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a href="{{route('frontend.about')}}">ABOUT</a></li>
                <li><a href="{{route('frontend.projects')}}">PROJECTS</a></li>
                <li><a href="{{route('frontend.gallery')}}">GALLERY</a></li>
                <li><a href="{{route('frontend.awards')}}">AWARDS</a></li>
                <li><a href="{{route('frontend.contact')}}">CONTACT</a></li>
              </ul>
            </div>
          </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::segment(1) === null ? 'active' : null }}">
                        <a class="nav-link " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.about')}}">About</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'projects' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.projects')}}">Projects</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'gallery' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'awards' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.awards')}}">Awards</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) === 'contact' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div
          class="hrline"
          style="position: relative; margin: -15px -15px 0 -15px"
        >
          <hr style="    border-top: 2px solid rgba(0,0,0,.1);" >
        </div>