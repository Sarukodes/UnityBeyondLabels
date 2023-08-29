@extends('back.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="card shadow p-3 mb-3">
        <div class="card-body">
            <form action="{{ route('admin.services.edit', ['service'=>$service->id]) }}" method="post"
                enctype="multipart/form-data" >
                @csrf
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$service->title}}">
                    </div>
                    <div class="col-md-6">
                        <label for="content">Content</label>
                        <input type="text" name="content" id="text" class="form-control" value="{{$service->content}}">
                    </div>
                    <div class="col-md-3 mb-2 small">
                        <label for="logo1">Logo1</label>
                        <input type="file" name="logo1" accept="image/*" id="logo" class="form-control photo"
                         data-default-file="{{ asset($service->logo1 )}}">
                    </div>
                    <div class="col-md-3 mb-2 small">
                        <label for="logo2">Logo2</label>
                        <input type="file" name="logo2" accept="image/*" id="logo" class="form-control photo"
                              data-default-file="{{ asset($service->logo2 )}}">
                    </div>
                    <div class="col-md-3 mb-2 small">
                        <label for="logo3">Logo3</label>
                        <input type="file" name="logo3" accept="image/*" id="logo" class="form-control photo"
                              data-default-file="{{ asset($service->logo3 )}}">
                    </div>
                    <div class="col-md-3 mb-2 small">
                       <label for="logo4">Logo4</label>
                       <input type="file" name="logo4" accept="image/*" id="logo"
                           class="form-control photo" data-default-file="{{ asset($service->logo4 )}}">
                   </div>
                </div>

        </div>
        <div class="py-2 text-end">
            <button class="btn btn-primary">
                Add Slider
            </button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-danger">Cancel</a>
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
