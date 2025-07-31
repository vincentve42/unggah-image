<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')


</head>
<body  x-data='{preview : false,navbar : false, mobile: true, upload: false, title: true, create_album:false, html_popup:false, change_background:false}' x-cloak  class=" bg-white">  
    <div class="navbar">
        @if(Auth::user())
        @include('layouts.navigation.logged-nav')
        @else

        @include('layouts.navigation.navbar')

        @endif
        
    </div>
    <div>
        @include('layouts.popup.change-backgroud')
    </div>
    <div>
        @include('layouts.upload')
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
<style>
  [x-cloak] { 
      display: none !important;
   }
</style>
</html>