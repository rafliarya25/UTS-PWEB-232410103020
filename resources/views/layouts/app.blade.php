<!DOCTYPE html>
<html>
<head>
    <title>UTS praktikum PWEB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
