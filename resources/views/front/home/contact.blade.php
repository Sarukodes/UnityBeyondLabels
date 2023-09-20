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
            <div class="text" style="font-size: 50px">Contact</div>
        </div>
    </div>
    <div class="contacts">
        @foreach ($contacts as $contact)
            <div class="row me-0">
                <div class="col-md-7">
                    <div class="title">{!! $contact->title !!}</div>
                    <div class="line"></div>
                    <div class="content">{{ $contact->text }}</div>
                    <div class="box-holder">
                        <div class="box">
                            <a href="tel:{{ $contact->Contactno }}">
                            <i class="fa-solid fa-mobile"></i>
                            </a>
                            <p>{{ $contact->Contactno }}</p>
                        </div>
                        <div class="box">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <p>{{ $contact->address }}</p>
                        </div>
                        <div class="box">
                            <a href="mailto:{{ $contact->gmail }}">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            </a>
                            <p>{{ $contact->gmail }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-5 contact-form">
                    <p>Contact Form</p>
                    <div class="line"></div>
                    <form action="/contact/save" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="FullName" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="submit">Contact US</button>
                    </form>
                </div>
            </div>
    </div>
@endsection
