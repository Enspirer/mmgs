<nav style="padding: 2vh 10vh">
    <div class="row m-0">
        <div class="left-logo">
            <a class="" href="{{url('/')}}" style="padding: 0;margin: 0;">
                <img src="{{url('desktop_res/assets/mmgs sm.png')}}" alt="" style="width: 33vh"/></a>
        </div>
        <div class="right-menu" style="margin-left: auto; padding: 2vh 0">
            <ul style="display: flex;text-decoration: none;list-style: none;display: flex;text-decoration: none;list-style: none;margin-bottom: 3vh !important;">
                <li class="active">
                    <a class="nav-link" style="{{ Request::segment(1) === null ? 'font-weight: 600;' : null }}" href="{{url('/')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="{{ Request::segment(1) === 'about' ? 'font-weight: 600;' : null }}" href="{{route('frontend.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="{{ Request::segment(1) === 'projects' ? 'font-weight: 600;' : null }}" href="{{route('frontend.projects')}}">Projects</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" style="{{ Request::segment(1) === 'gallery' ? 'font-weight: 600;' : null }}" href="{{route('frontend.gallery')}}">Gallery</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" style="{{ Request::segment(1) === 'awards' ? 'font-weight: 600;' : null }}" href="{{route('frontend.awards')}}">Awards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="{{ Request::segment(1) === 'contact' ? 'font-weight: 600;' : null }}" href="{{route('frontend.contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>