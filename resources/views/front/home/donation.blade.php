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

            <div class="text" style="font-size: 50px">Donate Now</div>
        </div>
    </div>
    <div class="showdonation">

        @foreach ($donation as $donation)
            <div class="image-container">
                {{-- style="background-attachment: fixed;
                  height: 70vh;
                  background-size: cover;
                  background-image:linear-gradient(
                                 180deg,
                                 rgba(12, 11, 11, 0.916),
                                 rgba(11, 10, 10, 0.779)
                             ),url('{{ asset($donation->background_image) }}')"> --}}
                <div class="container">
                    <div class=" text row">
                        <div class="col-md-3 donation-text"> {!! $donation->text1 !!} </div>
                        <div class="col-md-6 image">
                            <img src="{{ $donation->image }}">
                        </div>
                        <div class="col-md-3 goal">
                            <div class="col-md-6">
                                {!! $donation->text3 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
