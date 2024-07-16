<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="nav bg-black">
            <div class="container p-2 text-center">
                <a class="me-5 text-white btn btn-info bg-sm" href="/">Beranda</a>
                <a class="me-5 text-white btn btn-info bg-sm" href="/data">Data</a>
                <a class="me-5 text-white btn btn-info bg-sm" href="/login">Login</a>
            </div>
        </div>

        <div class="main container">
            @yield('content')
        </div>
    </div>
</body>

</html>