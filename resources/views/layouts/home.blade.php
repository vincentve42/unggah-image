<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')


</head>
<body x-data='{navbar : false, mobile: true}'>  
    <div class="navbar">
        @include('layouts.navigation.navbar')
        
    </div>
    <div class="container">
         @yield('container')
    </div>
</body>
</html>