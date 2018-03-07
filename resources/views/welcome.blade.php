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

        <style type="text/css">
            img {
                max-width: 100%;
                height: auto;
                width: auto\9; /* ie8 */
            }
        </style>
       
    </head>
    <body>
    
        <div class="container">
            <div class="split left">
                <!-- <h2>O'mark school of health Technology</h2> -->

                <a href=" {{ route('healthHome') }} " style="color: black; font-weight: bold; font-size: 30px;">Click/Tap logo to enter site<img src="images/OmarkHealth_bg.png"></a>
            </div>
            <div class="split right">
                <!-- <h2>O'mark primary and secondary schools</h2> -->

                
                <a href=" {{ route('secondaryGallery') }} " style="color: black; font-weight: bold; font-size: 30px;">Click/Tap logo to enter site<img src="images/omark_pictures/omark_secondary_logo.png" height="400px" width="400px"></a>
            </div>
        </div>
        

        <script type="text/javascript" src=" {{ asset('js/scratchJS.js') }} "></script>
    </body>
</html>
