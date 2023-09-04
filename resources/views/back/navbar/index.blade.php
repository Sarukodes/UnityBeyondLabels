@extends('back.layout')
@section('toolbar')
<a href="{{route('admin.navbar.add')}}">Add Navbar </a>
@endsection
@section('content')
<div class="card shadow">
    <div class="card-body">
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th> Logo</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($navbars as $navbar)
                <tr>
                    <td>
                        <img src="{{ asset($navbar->logo) }}" alt="" srcset="" width="70">
                    </td>
                    <td>
                        <a href="{{ route('admin.navbar.edit', ['navbar' => $navbar->id]) }}"
                            class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.navbar.del', ['navbar' => $navbar->id]) }}" class="btn btn-danger"
                            onclick="return confirm('Delete')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
