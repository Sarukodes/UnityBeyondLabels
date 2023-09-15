<div class="navbar sticky-top bg-white" >
    <div class="icon">
           <a href="{{route('front.index')}}" class="logo">
               {{-- <img src="{{ asset($slider->logo) }}"  alt=""> --}}
           </a>
    </div>
    <ul class="menus">
       <li>
           <a href="{{ route('front.index') }}" class="">
               <span class="links_name">Home</span>
           </a>
       </li>
       {{-- <li>
           <a href="#services" class="">
               <span class="links_name">Services</span>
           </a>
       </li> --}}
       {{-- <li class="dropdown">
           <a href="#" class="active dropdown-toggle" data-bs-toggle="dropdown">
               <span class="links_name">Get Involved</span>
           </a>
           <ul class="dropdown-menu">
               <li><a href="#home">Volunteer</a></li>
               <li><a href="#home">Events</a></li>
           </ul>
       </li> --}}
       <li>
           <a href="#news" class="active">
               <span class="links_name">News & Events</span>
            </a>
        </li>
        <li>
            <a href="{{ route('front.contact') }}" class="active">
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
