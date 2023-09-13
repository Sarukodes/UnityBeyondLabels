@extends('back.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('toolbar')
    <a href="{{ route('admin.news.index') }}" >View</a>
@endsection
@section('content')
    <div class="card shadow p-3 mb-3">
        <div class="card-body">
            <form action="{{ route('admin.news.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="highlight_content">Highlight Content</label>
                        <input type="text" name="highlight_content" id="content" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="content">Content</label>
                        <input type="text" name="content" id="content" class="form-control">
                    </div>

                    <div class="col-md-4 mb-2 small">
                        <label for="image">Image</label>
                        <input type="file" name="image" accept="image/*" id="image"
                            class="form-control photo" required>
                    </div>
                </div>

        </div>
        <div class="py-2 text-end">
            <button class="btn btn-primary">
                Add News
            </button>
            <a href="{{ route('admin.news.index') }}" class="btn btn-danger">Cancel</a>
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
