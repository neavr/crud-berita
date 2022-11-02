@extends('layot.navbar')

@section('content')
    <br>
    <div class="d-flex justify-content-end">


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
    </button>

    </div>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Hoaks</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $key => $berita)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $berita->nama_berita }}</td>
                    <td><button class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#updateModal" data-url="{{ route('berita.update',['id'=>$berita->id_berita]) }}" data-nama_berita="{{ $berita->nama_berita }}">Update</button> | <a href="{{ route('berita.delete', ['id'=>$berita->id_berita]) }}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('berita.create', ['id'=>1]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Berita</label>
                            <input type="text" name="nama_berita" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content">

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        $('#updateModal').on('shown.bs.modal', function(e) {
            var html = `
            <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="${$(e.relatedTarget).data('url')}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Berita</label>
                <input type="text" name="nama_berita" value="${$(e.relatedTarget).data('nama_berita')}" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>

`;

            $('#modal-content').html(html);

        });
    </script>
@endsection
