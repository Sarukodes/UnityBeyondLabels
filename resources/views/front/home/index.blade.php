@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
@foreach ($sliders as $key => $slider)
<section class="home"
style=" background-image: linear-gradient(
180deg,
rgba(0, 0, 0, 0.42),
rgba(239, 155, 231, 0.167)
),
url('{{ asset($slider->desktop_image) }}');">
  @endforeach
        {{-- <div class="navbar">
             <ul class="nav-links">
                <li>
                    <div class="logo">
                        <img src="{{ asset($slider->logo) }}"  alt="">

                    </div>
                    @endforeach
                </li>
                <li>
                    <a href="{{ route('front.index') }}" class="">
                        <span class="links_name">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}" class="">
                        <span class="links_name">About US</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="active dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="links_name">Get Involved</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('front.index') }}">Volunteer</a></li>
                        <li><a href="{{ route('front.index') }}">Events</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('front.index') }}" class="active">
                    <span class="links_name">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.index') }}" class="">
                        <span class="links_name">Donation</span>
                    </a>
                </li>
             </ul>
        </div> --}}
        <div class="home-text col-md-5">
          <span class="title">{!! $slider->title !!}</span>
          <span class="text">{!! $slider->text !!}</span>
          <button class="button_text">{{$slider->button_text}}</button>
        </div>

@endsection


