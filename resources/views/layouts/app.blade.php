<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/polylogo.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/polylogo.jpg') }}" rel="apple-touch-icon">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-03.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:weight@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/summernote/summernote.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style>
        .form-group {
            padding: 10px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        textarea {
            resize: none;
        }

        svg {
            display: none;
        }

        table img {
            height: 50px;
            width: 70px;
        }

        a,
        button {
            display: block;
            margin: 5px;
        }

        .btn-block {
            width: 100% !important;
        }

        .form-group img {
            height: 180px;
            width: 180px;
        }

        span.text-danger {
            font-size: 13px;
        }


        @media print {
            table {
                border: 1px solid black !important;
            }
        }
    </style>

    @livewireStyles

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/polylogo.jpg') }}" alt="">
                <!-- <span class="d-none d-lg-block">{{ env('APP_NAME', 'Laravel') }}</span> -->
                <span class="d-none d-lg-block">Migrations</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    {{-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img class="object-cover w-10 h-10 rounded-full" src=""
                            alt="Kamil" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">Kamil</span>
                    </a> --}}

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kamil</h6>
                            {{-- <span>{{Auth::user()->role}}</span> --}}
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="#">
                                @csrf

                                <a class="dropdown-item d-flex align-items-center"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    @include('layouts.sidebar')

    <main id="main" class="main">

        {{ $slot }}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ env('APP_NAME', 'Laravel') }} </span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @livewireScripts

    <script>
        $(document).ready(function() {

        })

        function print(reference = '') {

            var divToPrint = document.getElementById(reference);

            var newWin = window.open('', 'Print-Window');

            newWin.document.open();

            newWin.document.write(
                `<html>
            <body onload="window.print()">
                <table border="1" cellpadding="10" cellspacing="0">
                    ${divToPrint.innerHTML}
                </table>
            </body>
        </html>
        `
            );

            newWin.document.close();

            setTimeout(function() {
                newWin.close();
            }, 200);

        }
    </script>

    @stack('modals')

</body>

</html>
