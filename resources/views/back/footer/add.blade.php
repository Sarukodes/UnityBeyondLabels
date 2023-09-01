@extends('back.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="card shadow p-3 mb-3">
        <div class="card-body">
            <form action="{{ route('admin.footer.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="phoneno">Phoneno</label>
                        <input type="phoneno" name="phoneno" id="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="logo_name">Logo name</label>
                        <input type="text" name="logo_name" id="logo_name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="copyright">Copyright</label>
                        <input type="text" name="copyright" id="Copyright" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="facebook_link">Facebook Link</label>
                        <input type="text" name="facebook_link" id="facebook_link" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="twitter_link">Twitter Link</label>
                        <input type="text" name="twitter_link" id="twitter_link" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="instagram_link">Instagram Link</label>
                        <input type="text" name="instagram_link" id="instagram_link" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="youtube_link">Youtube Link</label>
                        <input type="text" name="youtube_link" id="youtube_link" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-2 small">
                        <label for="logo1">Logo Image</label>
                        <input type="file" name="logo" accept="image/*" id="logo" class="form-control photo"
                            required>
                    </div>
                </div>
        </div>
        <div class="py-2 text-end">
            <button class="btn btn-primary">
                Add Footer
            </button>
            <a href="{{ route('admin.footer.index') }}" class="btn btn-danger">Cancel</a>
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
