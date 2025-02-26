<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--  <script src="{{ url('js/main.js') }}" type="module"></script> -->
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
        <title>Apenas Lojinha</title>

        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
            @include('/include/header');
        </header>

        <main>
            <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                
                <div class="vitrine" id="css">
                    
                </div>

            </div>
        </main>
    </body>
</html>