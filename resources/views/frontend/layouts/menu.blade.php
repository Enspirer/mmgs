<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/assets/mmgs sm.png')}}" alt="" /></a>
            <div class="navbar-toggler" type="button">
            <input type="checkbox" id="overlay-input" />
            <label for="overlay-input" id="overlay-button"><span></span></label>
            <!-- <span class="navbar-toggler-icon"></span> -->
            <div id="overlay">
              <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">PROJECTS</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">AWARDS</a></li>
                <li><a href="#">CONTACT</a></li>
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
