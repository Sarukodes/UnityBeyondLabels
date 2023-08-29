@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.services.add') }}" >Add service</a>
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow mb-3">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Logo1</th>
                            <th>Logo2</th>
                            <th>Logo3</th>
                            <th>Logo4</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>

                                <td>{{ $service->title }}</td>
                                <td>{{ $service->content }}</td>
                                <td>
                                    <img src="{{ asset($service->logo1) }}" alt="" srcset=""
                                        width="70">
                                </td>
                                <td>
                                    <img src="{{ asset($service->logo2) }}" alt="" srcset=""
                                        width="70">
                                </td>
                                <td>
                                    <img src="{{ asset($service->logo3) }}" alt="" srcset=""
                                        width="70">
                                </td>
                                <td>
                                    <img src="{{ asset($service->logo4) }}" alt="" srcset=""
                                        width="70">
                                </td>

                                <td>
                                    <a href="{{ route('admin.services.edit', ['service' => $service->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.services.del', ['service' => $service->id]) }}"
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
