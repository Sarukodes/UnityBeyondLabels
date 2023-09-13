@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.news.add') }}">Add News</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card body">
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Highlight Content</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->highlight_content }}</td>
                            <td>
                                <img src="{{ asset($new->image) }}" alt="" srcset="" width="70">
                            </td>
                            <td>
                                <a href="{{ route('admin.news.edit', ['news' => $new->id]) }}"
                                    class="btn btn-primary">Edit</a>
                                <a href="{{ route('admin.news.del', ['news' => $new->id]) }}" class="btn btn-danger"
                                    onclick="return confirm('Delete')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
