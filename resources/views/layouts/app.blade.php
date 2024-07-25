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


    <!--Tambahan-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 50px;"> <b>SMK Ar-Rahmah</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest


                        @else
                        <div class="col-12 border rounded-5">
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" style="color: white;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nama }}
                                </a>



                                <div class="dropdown-menu dropdown-menu-end border rounded-5" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-primary rounded-5" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="" style="padding: 3.5rem;">
            @yield('content')
        </main>
    </div>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>
<script>
    function deleteConfirmation(nama) {
        var form = event.target.form;
        Swal.fire({
            title: 'Apakah anda yakin?',
            icon: 'warning',
            html: "Anda akan menghapus akun dengan nama <strong>" + nama + "</strong>",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
        }).then((result) => {
            if (result.value) {
                form.submit();
            }
        });
    }
</script>

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
        case 'info':
            Swal.fire({
                type: 'info',
                title: "{{ Session::get('message') }}"
            })
            break;
        case 'success':
            Swal.fire({
                type: 'success',
                icon: 'success',
                title: "Berhasil !!!",
                text: "{{ Session::get('message') }}"
            })
            break;
        case 'warning':
            Swal.fire({
                type: 'warning',
                title: "{{ Session::get('message') }}"
            })
            break;
        case 'error':
            Swal.fire({
                type: 'error',
                icon: 'error',
                title: "Gagal !!!",
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

<script>
    function disableCheckbox(checkbox) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(cb) {
            if (cb !== checkbox) {
                cb.disabled = checkbox.checked;
            }
        });
    }
</script>

<script>
    function handleCheckboxChange(checkbox) {
        var checkboxes = document.getElementsByName(checkbox.name);
        checkboxes.forEach(function(currentCheckbox) {
            if (currentCheckbox !== checkbox) {
                currentCheckbox.checked = false;
            }
        });
    }
</script>

<script>
    function handleCheckboxChange(checkbox) {
        var checkboxes = document.getElementsByName(checkbox.name);
        checkboxes.forEach(function(currentCheckbox) {
            if (currentCheckbox !== checkbox) {
                currentCheckbox.checked = false;
            }
        });

        if (checkbox.value === "tidak_kompeten") {
            Swal.fire({
                title: "Peringatan",
                text: "Anda harus memilih checkbox 'Kompeten' untuk setiap langkah",
                icon: "warning",
                confirmButtonText: "OK",
            });
        }
    }

   

    document.getElementById('submitButton').addEventListener('click', validateForm);
</script>
<script>
    function toggleAllCheckboxes(value, isChecked) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"][value="' + value + '"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = isChecked;
        });
    }

    var toggleAllKompetenCheckbox = document.getElementById('toggleAllKompeten');
    var toggleAllTidakKompetenCheckbox = document.getElementById('toggleAllTidakKompeten');

    toggleAllKompetenCheckbox.addEventListener('change', function() {
        toggleAllCheckboxes('kompeten', this.checked);
        toggleAllTidakKompetenCheckbox.checked = false;
    });

    toggleAllTidakKompetenCheckbox.addEventListener('change', function() {
        toggleAllCheckboxes('tidak_kompeten', this.checked);
        toggleAllKompetenCheckbox.checked = false;
    });

    toggleAllKompetenCheckbox.addEventListener('change', function() {
        if (!this.checked) {
            var kompetenCheckboxes = document.querySelectorAll('input[type="checkbox"][value="kompeten"]');
            kompetenCheckboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    });

    toggleAllTidakKompetenCheckbox.addEventListener('change', function() {
        if (!this.checked) {
            var tidakKompetenCheckboxes = document.querySelectorAll('input[type="checkbox"][value="tidak_kompeten"]');
            tidakKompetenCheckboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    });
</script>



</html>