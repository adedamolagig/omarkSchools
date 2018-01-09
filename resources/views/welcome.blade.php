<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Omark Schools</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/customCSS.css') }}">

       
    </head>
    <body>
    
        <div class="container">
            <div class="split left">
                <h2>O'mark school of health Technology</h2>
                <hr>
                <h2>Site under construction...for more enquires call 08023711092</h2>
                <a href="#" class="button">Enter Site</a>
            </div>
            <div class="split right">
                <h2>O'mark primary and secondary schools</h2>
                <a href="#" class="button">Enter Site</a>
            </div>
        </div>
        

        <script type="text/javascript" src=" {{ asset('js/scratchJS.js') }} "></script>
    </body>
</html>
