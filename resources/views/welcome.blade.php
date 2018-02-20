<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Omark Schools">
        <meta name="keywords" content="School of health technology, secondary schools, primary schools, omark">
        <meta name="author" content="Adedamola">
       

        <title>Omark Schools</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/customCSS.css') }}">

       
    </head>
    <body>
    
        <div class="container">
            <div class="split left">
                <h2>O'mark school of health Technology</h2>

                <a href=" {{ route('healthHome') }} " class="button"><img src="images/OmarkHealth_bg.png"></a>
            </div>
            <div class="split right">
                <h2>O'mark primary and secondary schools</h2>

                <p>click logo to enter site</p>
                <a href=" {{ route('secondaryGallery') }} " class="button"><img src="images/omark_pictures/omark_secondary_logo.jpg" width="400px" ></a>
            </div>
        </div>
        

        <script type="text/javascript" src=" {{ asset('js/scratchJS.js') }} "></script>
    </body>
</html>
