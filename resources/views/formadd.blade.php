@extends('layouts/main')
@section('titles', 'eMaha - Form Add')
@section('content')
    <div class="card mt-4">
        <div class="card-header"><strong>Form Add Data</strong></div>
        <div class="card-body">
            <form action="/students/save" method="POST">
                @csrf
                <div class="form-group w-50">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM"
                        aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" style="width: 595px"
                        aria-describedby="helpId">
                </div>

                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value= "Pria">
                    <label>Pria</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" class="form-check-input" value= "Wanita">
                    <label>Wanita</label>
                </div>

                <label>Program Studi</label>
                <div class="form-group">
                    <select name="prodi" class="form-control" style="width: 200px">
                        <option value="0">=== Pilih Prodi ===</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Kedokteran">Kedokteran</option>
                    </select>
                </div>

                <label>Minat</label>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value= "AI">
                    <label>Artificial Intelligence</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value= "DBMS">
                    <label>Database Engineering</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minat[]" class="form-check-input" value= "WEB">
                    <label>Web Engineering</label>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" role="button" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
