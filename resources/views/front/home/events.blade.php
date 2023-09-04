@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="events">
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
        @foreach ($news as $new)
            <div class="event-container">
                <div class="row me-0">
                    <div class="col-md-5 image">
                        <img src="{{ $new->image }}" width="400px">
                    </div>
                    <div class="col-md-7 texts">
                        <p class="title">{{ $new->title }}</p>
                        <div class="line"></div>
                        <p class="content">{{ $new->content }}</p>
                        <a href="" class="btn read">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="custom-pagination">
            @if ($news->lastPage() > 1)
                <span class="pagination-link {{ $news->currentPage() <= 1 ? 'disabled' : '' }}">
                    <a href="{{ $news->previousPageUrl() }}" >
                        <i class="fa fa-chevron-left"></i>
                        </a>
                </span>
                @for ($i = 1; $i <= $news->lastPage(); $i++)
                    <span class="pagination-link {{ $news->currentPage() == $i ? 'active' : '' }}">
                        <a href="{{ $news->url($i) }}" >{{ $i }}</a>
                    </span>
                @endfor
                <span class="pagination-link {{ $news->currentPage() == $news->lastPage() ? 'disabled' : '' }}">
                    <a href="{{ $news->nextPageUrl() }}" >
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </span>
            @endif
        </div>

    </div>

@endsection
