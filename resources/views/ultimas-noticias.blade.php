<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('https://visiondigital-production.up.railway.app/css/home/structure.css') }}"> <!-- css pagina principal-->
    <!-- Styles -->

</head>


<body class="antialiased">

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="box-new">
                    <img class="burguer-svg" src="lol.svg" width="50" height="28"> <p class="p-svg-menu">MENÚ</p>
                </div>
                <div class="box-search">
                    <img class="search-svg" src="bx-search.svg" width="50" height="28">
                    <input class="input" type="text" placeholder="BUSCAR">
                </div>
            </div>

            <img class="img-principal" src="DESKTOP.png" width="50" height="28">

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ route('register') }}" class="button is-primary">
                            <strong>REGISTRARSE</strong>
                        </a>
                        <a href="{{ url('/home') }}" class="button is-light">
                            INICIAR SESION
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- El id: componente. - Es un intermediario para usar React-->
    <div class="link-seperation">
        
        <ul class="ul-links">
            <li class="li-noticias">
                <a class="a-noticias ULTIMASNOT" href="{{ url('/') }}">
                    ÚLTIMAS NOTICIAS
                </a>
                <a class="a-noticias" href="{{ url('/ciberseguridad') }}">
                    CIBERSEGURIDAD
                </a>
                <a class="a-noticias" href="{{ url('/ia') }}">
                    IA
                </a>
                <a class="a-noticias" href="{{ url('/tecnologia') }}">
                    TECNOLOGÍA
                </a>
            </li>
        </ul>
    </div>
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
            Ultimas noticias
        </p>
        </div>
    </section>
    <div class="box-publicidad">
        <p class="p-publicidad">publicidad</p>

    </div>

    <div class="img-y-noticia">
        <img class="robot-img" src="robot.png" width="50" height="28">
        <div class="box-noticia">
            <a class="a-noticia-section" to="/about">
                TECNOLOGÍA
            </a>
            <a class="a-noticia-title">Jeff Bezos, Nvidia, OpenAI y Microsoft se unen para desarrollar robots similares a los humanos</a>
            <p class="p-descripcion">La ‘startup’ Figure AI está captando unos 675 millones de dólares en una ronda de financiación</p>
            <div class="p-fecha-y-redaccion">
                <p class="p-redaccion">REDACCION BLOOMBERG</p>
                <p class="p-redaccion">03-05-2024</p>
            </div>
            
        </div>
        
    </div>
    <div class="card-extra-noticias">
        <img class="img-min-noticia" src="person.png" width="50" height="28">
        
        <div class="box-min-noticia">
            <a class="a-min-noticia-section">CIBERSEGURIDAD</a>
            <p class="a-min-noticia-title">IA y ciberseguridad: Un yin yang tecnológico</p>
            <div class="p-fecha-y-redaccion">
                <p class="p-redaccion color">Marcelo Zillo, líder de Seguridad de AWS para América Latina</p>
                <p class="p-redaccion color">03-05-2024</p>
            </div>
        </div>
        <div class="card-dimiuta-noticia">
            <p class="lo-mas-leido-txt">LO MÁS LEÍDO</p>
            <div class="box-min-not">
                <img class="img-article-not" src="person.png" width="50" height="28">
                <div class="card-article-min-noticia">
                    <a class="a-min-noticia-section min">title noticia</a>
                    <p class="descript-min-not">Antes y después de Angela Torres: su experiencia en la farándula y los cambios estéticos</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-extra-noticias">
        <img class="img-min-noticia" src="person.png" width="50" height="28">
        <div class="box-min-noticia">
            <a class="a-min-noticia-section">CIBERSEGURIDAD</a>
            <p class="a-min-noticia-title">IA y ciberseguridad: Un yin yang tecnológico</p>
            <div class="p-fecha-y-redaccion">
                <p class="p-redaccion color">Marcelo Zillo, líder de Seguridad de AWS para América Latina</p>
                <p class="p-redaccion color">03-05-2024</p>
            </div>
        </div>
        <div class="card-dimiuta-noticia">
            <p class="lo-mas-leido-txt">LO MÁS LEÍDO</p>
            <div class="box-min-not">
                <img class="img-article-not" src="person.png" width="50" height="28">
                <div class="card-article-min-noticia">
                    <a class="a-min-noticia-section min">title noticia</a>
                    <p class="descript-min-not">Antes y después de Angela Torres: su experiencia en la farándula y los cambios estéticos</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-extra-noticias">
        <img class="img-min-noticia" src="person.png" width="50" height="28">
        <div class="box-min-noticia">
            <a class="a-min-noticia-section">CIBERSEGURIDAD</a>
            <p class="a-min-noticia-title">IA y ciberseguridad: Un yin yang tecnológico</p>
            <div class="p-fecha-y-redaccion">
                <p class="p-redaccion color">Marcelo Zillo, líder de Seguridad de AWS para América Latina</p>
                <p class="p-redaccion color">03-05-2024</p>
            </div>
        </div>
        <div class="card-dimiuta-noticia">
            <p class="lo-mas-leido-txt">LO MÁS LEÍDO</p>
            <div class="box-min-not">
                <img class="img-article-not" src="person.png" width="50" height="28">
                <div class="card-article-min-noticia">
                    <a class="a-min-noticia-section min">title noticia</a>
                    <p class="descript-min-not">Antes y después de Angela Torres: su experiencia en la farándula y los cambios estéticos</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-extra-noticias">
        <img class="img-min-noticia" src="person.png" width="50" height="28">
        <div class="box-min-noticia">
            <a class="a-min-noticia-section">CIBERSEGURIDAD</a>
            <p class="a-min-noticia-title">IA y ciberseguridad: Un yin yang tecnológico</p>
            <div class="p-fecha-y-redaccion">
                <p class="p-redaccion color">Marcelo Zillo, líder de Seguridad de AWS para América Latina</p>
                <p class="p-redaccion color">03-05-2024</p>
            </div>
        </div>
        <div class="card-dimiuta-noticia">
            <p class="lo-mas-leido-txt">LO MÁS LEÍDO</p>
            <div class="box-min-not">
                <img class="img-article-not" src="person.png" width="50" height="28">
                <div class="card-article-min-noticia">
                    <a class="a-min-noticia-section min">title noticia</a>
                    <p class="descript-min-not">Antes y después de Angela Torres: su experiencia en la farándula y los cambios estéticos</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-extra-noticias">
        <img class="img-min-noticia" src="person.png" width="50" height="28">
        <div class="box-min-noticia">
            <a class="a-min-noticia-section">CIBERSEGURIDAD</a>
            <p class="a-min-noticia-title">IA y ciberseguridad: Un yin yang tecnológico</p>
            <div class="p-fecha-y-redaccion">
                <p class="p-redaccion color">Marcelo Zillo, líder de Seguridad de AWS para América Latina</p>
                <p class="p-redaccion color">03-05-2024</p>
            </div>
        </div>
        <div class="card-dimiuta-noticia">
            <p class="lo-mas-leido-txt">LO MÁS LEÍDO</p>
            <div class="box-min-not">
                <img class="img-article-not" src="person.png" width="50" height="28">
                <div class="card-article-min-noticia">
                    <a class="a-min-noticia-section min">title noticia</a>
                    <p class="descript-min-not">Antes y después de Angela Torres: su experiencia en la farándula y los cambios estéticos</p>
                </div>
            </div>
        </div>
    </div>

    <!--<script src="{{ asset('js/welcome.js') }}" defer></script>-->
  </body>

</html>
