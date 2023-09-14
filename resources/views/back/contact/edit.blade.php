@extends('back.layout')
@section('toolbar')
<a href="{{ route('admin.contact.index') }}"> View </a>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="card shadow p-3 mb-3">
        <div class="card-body">
            <form action="{{ route('admin.contact.edit', ['contact'=>$contact->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$contact->title}}">
                    </div>
                    <div class="col-md-6">
                        <label for="text">Text</label>
                        <input type="text" name="text" id="text" class="form-control" value="{{$contact->text}}">
                    </div>
                    <div class="col-md-6">
                        <label for="Contactno">Contact No</label>
                        <input type="text" name="Contactno" id="Contactno" class="form-control" value="{{$contact->Contactno}}">
                    </div>
                    <div class="col-md-6">
                        <label for="address"> Address </label>
                        <input type="text" name="address" id="address" class="form-control" value="{{$contact->address}}">
                    </div>
                    <div class="col-md-6">
                        <label for="gmail">Email</label>
                        <input type="text" name="gmail" id="gmail" class="form-control" value="{{$contact->gmail}}">
                    </div>
                    <div class="col-md-6">
                        <label for="map"> Map</label>
                        <input type="text" name="map" id="map" class="form-control" value="{{$contact->map}}">
                    </div>
                </div>
        </div>
        <div class="py-2 text-end">
            <button class="btn btn-primary">
                Add Contact
            </button>
            <a href="{{ route('admin.contact.index') }}" class="btn btn-danger">Cancel</a>
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
