<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
        
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
</head>
<body>
    <div id="app">
       
          @include('partials.infos')
          
          @include('partials.menu')
        
         <div class="container" style="margin-top:0px">
              @include('partials.flash')
          </div>
       

        <main>
            @yield('content')
        </main>
        
         <div class="divfooter">
          @include('partials.copyright')
         </div>
        
           @yield('javascript')
           
         
        
    </div>
</body>
</html>
