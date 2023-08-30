@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection

@section('content')
    <section class="home" id="home">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $index => $slider)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="slider-item"
                            style="background-image: linear-gradient(
                                180deg,
                                rgba(0, 0, 0, 0.42),
                                rgba(239, 155, 231, 0.167)
                            ),
                            url('{{ asset($slider->desktop_image) }}');">
                            <div class="home-text col-md-5">
                                <span class="title">{!! $slider->title !!}</span>
                                <span class="text">{!! $slider->text !!}</span>
                                <button class="button_text">{{ $slider->button_text }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="services" id="services">
        <div class="row me-0">
            @foreach ($services as $key => $service)
                <div class="col-md-7">
                    <div class="text m-0">
                        <div class="title">{!! $service->title !!}</div>
                        <div class="line"></div>
                        <div class="content">{!! $service->content !!}</div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="icon p-md-3 p-2 m-0">
                        <div class="logo">
                            <div class="row">
                                <div class="box col-md-6">
                                    <div class="box1">
                                        <img src="{{ $service->logo1 }}">
                                        <div class="logo_title">{{ $service->logo1_title }} </div>
                                    </div>
                                </div>
                                <div class="box col-md-6">
                                    <div class="box2">
                                        <img src="{{ $service->logo2 }}">
                                        <div class="logo_title">{{ $service->logo2_title }} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="box col-md-6">
                                    <div class="box3">
                                        <img src="{{ $service->logo3 }}">
                                        <div class="logo_title">{{ $service->logo3_title }} </div>
                                    </div>
                                </div>
                                <div class="box col-md-6">
                                    <div class="box4">
                                        <img src="{{ $service->logo4 }}">
                                        <div class="logo_title">{{ $service->logo4_title }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="donation" id="donation">
        @foreach ($donations as $key => $donation)
            <div class="image-container"
                style="background-attachment: fixed;
                 height: 70vh;
                 background-size: cover;
                 background-image:linear-gradient(
                                180deg,
                                rgba(12, 11, 11, 0.916),
                                rgba(11, 10, 10, 0.779)
                            ),url('{{ asset($donation->background_image) }}')">
                <div class="container">
                    <div class=" text row">
                        <div class="col-md-3 donation-text">  {!! $donation->text1 !!} </div>
                        <div class="col-md-6 image">
                        <img src="{{$donation->image}}">
                        </div>
                        <div class="col-md-3 goal">
                                <div class="col-md-6">
                                    {!! $donation->text3!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection


@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach ($sliders as $index => $slider)
                $('#carousel').carousel();
            @endforeach
        });
    </script>
@endsection
