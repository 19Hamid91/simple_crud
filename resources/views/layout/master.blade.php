<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    @yield('css')
    <style>
        .no-sort::after { display: none!important; }
        .no-sort::before { display: none!important; }
        .no-sort { pointer-events: none!important; cursor: default!important; }
   </style>
</head>
<body>
    @stack('js')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @include('layout.navbar')
    @yield('content')
</body>
<footer>
    <div class="pt-3 pb-3"></div>
</footer>
</html>