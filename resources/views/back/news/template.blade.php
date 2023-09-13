<div class="news-holder">
    <div class="row me-0">
        @foreach ($news as $new)
            <div class="col-md-6 col-sm-12">
                <div class="event-box">
                    {{-- <a href="{{ route('front.news', ['id' => $new->id]) }}" class="news-link"> --}}
                    <img src="{{ asset($new->image) }}" class="news-image">
                    <div class="text">
                        <a href="{{ route('front.news', ['id' => $new->id]) }}" class="news-link">
                        <p class="title">{{$new->title}}</p>
                        <div class="line"></div>
                        <p class="content">{{$new->highlight_content}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
