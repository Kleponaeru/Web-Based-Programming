@extends('layouts/main')
@section('titles', 'eMaha - Form Edit')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Form Edit</strong></div>
        <div class="card-body">

            @php
                $minat = explode(", ", $mhs -> minat);
            @endphp

            <form action="/students/update/{{ $mhs->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-50">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}"
                        aria-describedby="helpId" readonly>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" style="width: 595px" value="{{ $mhs->nama }}"
                        aria-describedby="helpId">
                </div>

                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value= "Pria" {{ ($mhs->gender == "Pria") ? 'checked':'' }}>
                    <label>Pria</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value= "Wanita" {{ ($mhs->gender == "Wanita") ? 'checked':'' }}>
                    <label>Wanita</label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control" style="width: 200px">
                        <option value="0">=== Pilih Prodi ===</option>
                        <option value="Sistem Informasi" {{ ($mhs -> prodi =='Sistem Informasi') ? 'selected':'' }}>Sistem Informasi</option>
                        <option value="Informatika" {{ ($mhs -> prodi =='Informatika') ? 'selected':'' }}>Informatika</option>
                        <option value="Hukum" {{ ($mhs -> prodi =='Hukum') ? 'selected':'' }}>Hukum</option>
                        <option value="Kedokteran" {{ ($mhs -> prodi =='Kedokteran') ? 'selected':'' }}>Kedokteran</option>
                    </select>
                </div>

                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value= "AI" {{ in_array('AI', $minat) ? 'checked':'' }}>
                    <label>Artificial Intelligence</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value= "DBMS" {{ in_array('DBMS', $minat) ? 'checked':'' }}>
                    <label>Database Engineering</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value= "WEB" {{ in_array('WEB', $minat) ? 'checked':'' }}>
                    <label>Web Engineering</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
