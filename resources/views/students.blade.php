@extends('layouts/main')
@section('titles', 'eMaha - Students')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <a href="/students/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-circle"></i> Add
                Students</a>
            <form action="/students/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">

            @if (session('flash'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                    <strong>{{ session('flash') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <script type="text/javascript">
                        setTimeout(function() {
                            $('#alert').alert('close');
                        }, 3500);
                    </script>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $idx => $n)
                        <tr>
                            <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                            <td>{{ $n->nim }}</td>
                            <td>{{ $n->nama }}</td>
                            <td>{{ $n->gender }}</td>
                            <td>{{ $n->prodi }}</td>
                            <td>{{ $n->minat }}</td>
                            <td>
                              <a href="students/formedit/{{ $n->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                              <a href="students/delete/{{ $n->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <span class="float-right">{{ $mhs->links() }}</span>
        </div>

    </div>

@endsection
