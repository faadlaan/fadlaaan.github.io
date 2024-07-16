@extends('template.main')
@section('content')

<h5>Data Siswa</h5>
<div class="border p-2">
    <table class="table table-dark table-striped ">
        <a href="/tambah">Tambah Data</a>
        <thead>
            <tr>
                <th>no</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
            <tr>
                <td>1</td>
                <td>{{ $s['nis'] }}</td>
                <td>{{ $s['nama'] }}</td>
                <td>{{ $s['jurusan'] }}</td>
                <td>
                    <a class="btn btn-info" href="/update/{{ $s['id_siswa']}}">UPDATE</a>
                    <a class="btn btn-danger" href="/delete/{{ $s['id_siswa']}}">DELET</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection