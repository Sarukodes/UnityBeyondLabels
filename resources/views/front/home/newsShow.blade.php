@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="newsShow">
        <div class="image-container"
            style="background-attachment: fixed;
height: 60vh;
background-size: cover;
background-image:linear-gradient(
 180deg,
 rgba(30, 29, 29, 0.55),
 rgba(42, 41, 41, 0.406)
 ),url('https://cdn.pixabay.com/photo/2022/06/12/18/32/lovers-7258617_1280.jpg')">
            <div class="text">Events</div>
        </div>
        <div class="selected-container">
            <div class="selected-news">
                <img src="{{ asset($news->image) }}" alt="" srcset="">
            </div>
            <div class="news-details">
                <p class="title">{{ $news->title }}</p>
                <div class="line"></div>
                <div class="cont">
                    <p class="content">{!! $news->content !!}</p>
                </div>
            </div>
            <div class="popular-event">
                <div class="popular">Popular Events</div>
                <div class="line"></div>
                <div class="news-holder">
                    @foreach ($allnews as $allnew)
                        <div class="row me-0">
                            <div class="col-md-6 col-sm-12">
                                <div class="event-box">
                                    <img src="{{ asset($allnew->image) }}" class="news-image">
                                    <div class="text">
                                        <p class="title">{{ $allnew->title }}</p>
                                        <div class="line"></div>
                                        <p class="content">{{ $allnew->highlight_content }}</p>
                                        <a href="{{ route('front.news', ['id' => $allnew->id]) }}" class="btn read">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
