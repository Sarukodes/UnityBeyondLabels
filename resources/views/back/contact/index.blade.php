@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.contact.add') }}">Add Contact</a>
@endsection
@section('content')
    <div class=" card shadow">
        <div class="card body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact )
                    <tr>
                        <td> {{$contact->title}}</td>
                        <td> {{$contact->text}}</td>
                        <td> {{$contact->address}}</td>
                        <td>
                            <a href="{{ route('admin.contact.edit', ['contact' => $contact->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.contact.del', ['contact' => $contact->id]) }}"
                                class="btn btn-danger" onclick="return confirm('Delete')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
