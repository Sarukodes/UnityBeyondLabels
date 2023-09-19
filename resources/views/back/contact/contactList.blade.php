@extends('back.layout')
@section('content')
    <div class=" card shadow">
        <div class="card body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> S.N </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Message </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactForms as $k => $contactForm)
                        <tr>
                            <td> {{ $k + 1 }}</td>
                            <td>
                                {{ $contactForm->name }}
                            </td>
                            <td>
                                {{ $contactForm->email }}
                            </td>
                            <td>
                                {{ $contactForm->message }}
                            </td>
                            <td>
                            <a href="{{ route('admin.contact.delete', ['contactForm' => $contactForm->id]) }}"
                                class="btn btn-danger" onclick="return confirm('Delete')">Delete</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
