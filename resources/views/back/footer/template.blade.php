<div class="footer">
    <div class="row me-0 foot">
        <div class="col-md-4 contact">
            <a href="mailto:{{ $footer->email }}">
                <i class="fa-solid fa-envelope mail" style="padding-right: 5px"> </i> {{ $footer->email }}
            </a>
            <a href="tel:{{ $footer->phoneno }}">
                <i class="fa-solid fa-phone " style="padding-right: 5px;padding-left: 10px"></i> {{ $footer->phoneno }}
            </a>
        </div>
        <div class="col-md-4 logo">
            <img src="{{ asset($footer->logo) }}" width="70px">
            <p class="text"> {{ $footer->logo_name }}</p>
        </div>
        <div class="col-md-4 icon">
            <a href={{ $footer->facebook_link }}> <i class="fa-brands fa-facebook"></i></a>
            <a href={{ $footer->youtube_link }}><i class="fa-brands fa-youtube"></i></a>
            <a href={{ $footer->twitter_link }}><i class="fa-brands fa-twitter"></i></a>
            <a href={{ $footer->instagram_link }}><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
    <hr>
    <div class="nav">
        <ul class="menus">
            <li>
                <a href="{{ route('front.index') }}" class="">
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="#services" class="">
                    <span class="links_name">Services</span>
                </a>
            </li>
            <li>
                <a href="#news" class="active">
                    <span class="links_name">News & Events</span>
                </a>
            </li>
            <li>
                <a href="{{ route('front.index') }}" class="active">
                    <span class="links_name">Contact</span>
                </a>
            </li>
            <li>
                <a href="#donation" class="">
                    <span class="links_name">Donation</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="copyright">
        <i class="fa-solid fa-copyright" style="padding-right: 5px"></i> {{ $footer->copyright }}
    </div>

</div>
