<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <title>Test</title>
</head>
<body>
    {{-- @include('header') --}}
    <div class="container-fluid">
        <div class="row g-0">
    @include('sidebar')
    <main class="col-10 bg-light">
        {{-- @include('horizontal') --}}
        <div class="container-fluid mt-2 p-4">
            <div class="row">
                <div class="col">
        @yield('content')
        
    </main>
    </div>
    </div>
    <footer class="py-3 footer-banner mt-5">
        <div class="container-fluid">
            <p class="m-0 text-center">&copy;2022 Min Khant Kyaw</p>
        </div>
    </footer>
    
    
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

