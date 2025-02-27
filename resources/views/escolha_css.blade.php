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
                    <center>
                        <h1>Escolha o tipo do serviço CSS</h1>
                    </center>
                    <p style="font-weight: bolder;">Escolher serviço:</p>
                    <select name="css_options" id="css_options">
                        <option value="0">Nenhum</option>
                        <option value="1">layout da pagina</option>
                        <option value="2">design da pagina</option>
                        <option value="3">design do header</option>
                        <option value="4">design do footer</option>
                        <option value="5">design do projeto</option>
                    </select>
                    <hr>
                    <div class="valor">
                        <h2>Valor do serviço</h2>
                        <p>R$ <b id="valor_service_css">00,00</b></p>
                    </div>
                    <button type="button" class="btn_comprar" id="BTN_comprar_css">Comprar</button>
                </div>

            </div>
        </main>
    </body>
</html>