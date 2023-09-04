<div class="news-holder">
    <div class="row me-0">
        @foreach ($news as $new)
            <div class="col-md-6 col-sm-12">
                <div class="event-box">
                    <img src="{{ asset($new->image) }}" class="news-image">
                    <div class="text">
                        <p class="title">{{$new->title}}</p>
                        <div class="line"></div>
                        <p class="content">{{$new->content}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
