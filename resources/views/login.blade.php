@extends('template.main')
@section('content')

<form class="border p-3" style="width: 500px;" action="/cek_login">
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection