@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.navbar.index') }}"> View </a>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.navbar.edit', ['navbar'=>$navbar->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4 mb-2 small">
                    <label for="logo">Logo</label>
                    <input type="file" name="logo" accept="image/*" id="image" class="form-control photo" data-default-file="{{asset($navbar->logo)}}">
                </div>
                <div class="py-2 text-end">
                    <button class="btn btn-primary">
                        Add News
                    </button>
                    <a href="{{ route('admin.navbar.index') }}" class="btn btn-danger">Cancel</a>
                </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".photo").dropify();
        });
    </script>
@endsection
