@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.donation.add') }}" >Add Donation</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow mb-3">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Text1</th>
                            <th>Text2</th>
                            <th>Text3</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($donations as $donation)
                            <tr>

                                <td>{{ $donation->text1 }}</td>
                                <td>{{ $donation->text2 }}</td>
                                <td>{{ $donation->text3 }}</td>
                                <td>
                                    <a href="{{ route('admin.donation.edit', ['donation' => $donation->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.donation.del', ['donation' => $donation->id]) }}"
                                        class="btn btn-danger" onclick="return confirm('Delete')">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
