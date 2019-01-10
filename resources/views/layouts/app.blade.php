<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos</title>
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <div id="wrapper">        
        @include('layouts.navigation')
        
        <div id="page-wrapper" class="gray-bg">           
            @yield('contenido')            
            @include('layouts.footer') 
        </div>       
    </div>    

    <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

    @section('scripts')
    @show
</body>
</html>
