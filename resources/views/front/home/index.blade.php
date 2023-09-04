@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <section class="home" id="home">
       @includeIf('front.cache.home.slider')
    </section>
    <section class="services" id="services">
         @includeIf('front.cache.home.services')
    </section>
    <section class="donation" id="donation">
         @includeIf('front.cache.home.donation')
    </section>
    <section class="news" id="news">
            <p class="cursive">LGBT Community</p>
            <p class="event">News & Events</p>
          @includeIf('front.cache.home.news')
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#carousel').carousel();
        });
    </script>
@endsection
