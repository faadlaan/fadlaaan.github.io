@extends('template.main')
@section('content')

<h5>TAmbah Siswa</h5>
<div class="border p-2">
    <form action="/edit/{{ $siswa['id_siswa'] }}">
        <div class="row">
            <label class="col-4">NIS</label>
            <input type="text" name="nis" class="form-control col" value="{{ $siswa['nis'] }}" required>
        </div>


        <div class="row">
            <label class="col-4">Nama</label>
            <input type="text" name="nama" class="form-control col" value="{{ $siswa['nama'] }}" required>
        </div>


        <div class="row mt-2">
            <label class="col-4">Jurusan</label>
            <select name="jurusan" class="form-select col">
                <option value="{{ $siswa['jurusan'] }}">{{ $siswa['jurusan'] }}</option>
                <option value="rpl">RPL</option>
                <option value="tkj">TKJ</option>
            </select>
        </div>

        <div class="row">
            <label class="col-4"></label>
            <button type="submit" class="btn btn-info">Edit</button>
        </div>
    </form>
</div>
@endsection