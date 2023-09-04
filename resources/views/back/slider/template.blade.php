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
