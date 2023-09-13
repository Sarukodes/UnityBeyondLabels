@extends('back.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="card shadow p-3 mb-3">
        <div class="card-body">
            <form action="{{ route('admin.slider.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-7 mb-2 small">
                        <label for="image">Desktop</label>
                        <input type="file" name="desktop_image" id="image" accept="image/*"
                            class="form-control photo" required>
                    </div>

                    <div class="col-md-4 mb-2 small">
                        <label for="mobile_image">Mobile Image</label>
                        <input type="file" name="mobile_image" accept="image/*" id="mobile_image"
                            class="form-control photo" required>
                    </div>

                    <div class="col-md-3 mb-2 small">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" accept="image/*" id="logo"
                            class="form-control photo" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="col-md-7">
                        <label for="">Text</label>
                        <input type="text" name="text" id="text" class="form-control">
                    </div>
                    <div class="col-md-7">
                        <label for="">Button text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control">
                    </div>
                </div>

        </div>
        <div class="py-2 text-end">
            <button class="btn btn-primary">
                Add Slider
            </button>
            <a href="{{ route('admin.slider.index') }}" class="btn btn-danger">Cancel</a>
        </div>
        </form>
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
