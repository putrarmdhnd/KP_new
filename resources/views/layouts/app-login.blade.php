<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <main class="mt-5">
        @yield('content')
    </main>
    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
    })
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type')}}";

    switch (type) {
       
        case 'error':
            Swal.fire({
                type: 'error',
                icon: 'error',
                title: "Error !!!",
                text: "{{ Session::get('message') }}"
            })
            break;
        case 'dialog_error':
            Swal.fire({
                type: 'error',
                title: "Ooops",
                text: "{{ Session::get('message') }}",
                timer: 3000
            })
            break;
    }
    @endif
    @if($errors -> any())
    @foreach($errors -> all() as $error)
    Swal.fire({
        type: 'error',
        title: "Ooops",
        text: "{{ $error }}",
    })
    @endforeach
    @endif

    @if($errors -> any())
    Swal.fire({
        icon: 'error',
        title: "Ooops",
        text: "Terjadi suatu kesalahan",
    })
    @endif
    $('#table-data').DataTable();
</script>

</html>