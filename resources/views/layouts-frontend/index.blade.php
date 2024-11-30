<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMKN 1 Dlanggu</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/frontend') }}/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('layouts-frontend.partial.navbar')
        @yield('content-frontend')
    </main>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/frontend') }}/js/scripts.js"></script>
</body>

</html>
