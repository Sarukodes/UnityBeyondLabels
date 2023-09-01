<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unity Admin Panel - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/back/index.css') }}">
    @yield('css')
</head>

<body>
    <div class="row  me-0">
        <div class="col-md-3">
            <div class="sidebar m-0">
                <div class="logo-details">
                    <i class="fa-solid fa-user "></i>
                    <span class="logo_name">Admin</span>
                </div>

                <ul class="nav-links">
                    <li>
                        <a href="{{ route('admin.dashboard.index') }}" class="active">
                            <i class="fa-solid fa-gauge me-2"></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.slider.index') }}" class="">
                            <i class="fa-solid fa-sliders me-2"></i>
                            <span class="links_name">Slider</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.index') }}" class="">
                            <i class="fa-solid fa-gear me-2"></i>
                            <span class="links_name">Service</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.donation.index') }}" class="">
                            <i class="fa-solid fa-hand-holding-dollar me-2"></i>
                            <span class="links_name">Donation</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.index') }}" class="">
                            <i class="fa-solid fa-newspaper"></i>
                            <span class="links_name">News & Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.footer.index') }}" class="">
                            <i class="fa-solid fa-shoe-prints"></i>
                            <span class="links_name">Footer</span>
                        </a>
                    </li>
                    <li class="log_out" style="margin-left: 24px">
                        {{-- <a href="{{route('logout')}}"> --}}
                        <i class="fa-solid fa-user me-2"></i>
                        <span class="links_name">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="main p-md-3 p-2 m-0">
                <div id="jumbo" class="shadow d-flex align-items-center justify-content-between">
                    <div class="toolbar">
                        @yield('toolbar')
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    @yield('scripts')
</html>
</body>
</html>
