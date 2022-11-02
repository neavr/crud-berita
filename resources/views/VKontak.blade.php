@extends('layot.navbar')

@section('content')
    <br>
    <div class="d-flex justify-content-end"><button class="btn btn-success">Create Data</button></div>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama kontak</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($kontaks as $key => $kontak)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $kontak->nama_kontak }}</td>
                    <td><button class="btn btn-warning">Update</button> | <button class="btn btn-danger">Delete</button></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
