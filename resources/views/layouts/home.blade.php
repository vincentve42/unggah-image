<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')


</head>
<body>  
    <div class="navbar">
        @include('layouts.navigation.navbar')
        @yield('navbar')
    </div>
</body>
</html>