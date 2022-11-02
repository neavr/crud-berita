@extends('layot.navbar')

@section('content')
    <br>

    <div class="d-flex justify-content-end"><button class="btn btn-success">Create Data</button></div>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama people</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($peoples as $key => $people)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $people->nama_people }}</td>
                    <td><button class="btn btn-warning">Update</button> | <button class="btn btn-danger">Delete</button></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
