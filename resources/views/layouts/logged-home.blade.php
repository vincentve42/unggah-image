<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')


</head>
<body x-data='{navbar : false, mobile: true, upload: false, title: true}' class="mx-auto m-0 p-0">  
    <div class="navbar">
        @if(Auth::user())
        @include('layouts.navigation.logged-nav')
        @else

        @include('layouts.navigation.navbar')

        @endif
        
    </div>
    <div>
        @include('layouts.profile.profile')
    </div>
    <div class="container">
         @yield('container')
    </div>
    <div>
        
    </div>
</body>
</html>