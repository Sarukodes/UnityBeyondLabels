<div class="desktop-navbar sticky-top bg-white">
    <div class="icon">
        <a href="{{ route('front.index') }}" class="logo">
            <img src="{{ asset($navbar->logo) }}" alt="">
        </a>
    </div>

    <div class="menu-containers" id="menuContainers">
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
                <a href="{{ route('front.events') }}" class="active">
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
</div>


<div class="mobile-navbar sticky-top bg-white">
    <div class="icon">
        <a href="{{ route('front.index') }}" class="logo">
            <img src="{{ asset($navbar->logo) }}" alt="">
        </a>
    </div>
    <button class="menu-toggle" id="mobileMenuToggle">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </button>
    <button class="menu-toggle close-icon" id="closeMenuToggle">X</button>
    <div class="menu-container" id="menuContainer">
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
                <a href="{{ route('front.events') }}" class="active">
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

</div>

<script>
    const mobileMenuToggle = document.getElementById("mobileMenuToggle");
const closeMenuToggle = document.getElementById("closeMenuToggle");
const menuContainer = document.getElementById("menuContainer");
const logo = document.querySelector(".mobile-navbar .icon");

mobileMenuToggle.addEventListener("click", () => {
    mobileMenuToggle.style.display = "none";
    closeMenuToggle.style.display = "block";
    menuContainer.style.display = "block"; // Show the menu items
    logo.style.display = "none"; // Hide the logo
    document.body.style.overflow = "hidden"; // Disable scrolling
});

closeMenuToggle.addEventListener("click", () => {
    mobileMenuToggle.style.display = "block";
    closeMenuToggle.style.display = "none";
    menuContainer.style.display = "none"; // Hide the menu items
    logo.style.display = "block"; // Show the logo
    document.body.style.overflow = "auto"; // Enable scrolling
});

</script>
