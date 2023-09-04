<div class="news-holder">
    @foreach ($news as $new)
     <div class="event-box">
            <img src="{{asset($new->image)}}" width="250px">
            <div class="text">
                <p class="title">{{$new->title}}</p>
                <div class="line"></div>
                <p class="content">{{$new->content}}</p>
            </div>
        </div>
        @endforeach
  </div>
</div>
