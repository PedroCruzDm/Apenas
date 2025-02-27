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
            @include('./include/header')
        </header>
        
            <main>
                <div class="caixa">

                    <div class="vitrine">
                        <div class="titulo">
                            <center>
                                <h1>Serviços</h1>
                            </center>
                        </div>

                        <div class="divisoria">
                            
                            <div class="item">
                            <img src="{{ url('image/css3.png') }}" alt="Imagem do Serviço">
                            <h2>Design clear style</h2>
                            <p>Descrição</p>
                            
                            <a href="{{ Url('escolha_css') }}">
                                <button class="ver_detalhes_btn" type="button" > Ver detalhes</button>
                            </a>
                        </div>
                        
                        <div class="item">
                            <img src="{{ url('image/js.png') }}" alt="Imagem do Serviço">
                            <h2>Script em JS</h2>
                            <p>Descrição</p>

                            <button class="ver_detalhes_btn" type="button">Ver detalhes</button>
                        </div>
                        
                    </div>
                </div>
            </div>


            </main>
    </body>
</html>
