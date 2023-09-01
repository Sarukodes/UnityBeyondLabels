@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.footer.add') }}">Add Footer</a>
@endsection
@section('content')
    <div class=" card shadow">
        <div class="card body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Phone no</th>
                        <th>Logo</th>
                        <th>Logo Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($footer as $footer)
                        <tr>
                            <td>{{$footer->email}}</td>
                            <td>{{$footer->phoneno}}</td>
                            <td>
                               <img src="{{asset($footer->logo)}}" width="50px">
                            </td>
                            <td>{{$footer->logo_name}}</td>

                        <td>
                            <a href="{{ route('admin.footer.edit', ['footer' => $footer->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.footer.del', ['footer' => $footer->id]) }}"
                                class="btn btn-danger" onclick="return confirm('Delete')">Delete</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
