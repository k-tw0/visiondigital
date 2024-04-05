<!-- resources/views/noticia/show.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/bulma/bulma.min.css') }}"> <!-- Bulma-->
        <link rel="stylesheet" href="{{ asset('css/home/structure.css') }}"> <!-- css pagina principal-->
        <link rel="stylesheet" href="{{ asset('css/home/show.css') }}">
        
        <!-- Styles -->

    </head>


    <body class="antialiased">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <div class="box-new" id="menuIcon">
                        <img class="burguer-svg" src="{{ asset('lol.svg') }}" width="50" height="28">
                        <p class="p-svg-menu">MENÚ</p>
                    </div>
                    <div class="box-search">
                        <img class="search-svg" src="{{ asset('bx-search.svg') }}" width="50" height="28">
                        <input class="input" type="text" placeholder="BUSCAR">
                    </div>
                </div>

                <img class="img-principal" src="{{ asset('DESKTOP.png') }}" width="50" height="28">

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

        <div id="menuContent" class="menu-content">

            <div class="box-nav-footer">
                <img class="img-principal menu" src="{{ asset('DESKTOP.png') }}" width="35" height="28">
                <img class="equis-menu" id="id-equis-menu" src="{{ asset('icons/bxs-x-circle.svg') }}" width="30" height="28">
            </div>

            <!-- Contenido del menú aquí -->
            <a href="#" class="menu-item nav-items">Video Juegos</a>
            <a href="#" class="menu-item nav-items">Ecomerces</a>
            <a href="#" class="menu-item nav-items">Donar</a>
            <a href="#" class="menu-item nav-items">Inversiones</a>
            <a href="#" class="menu-item nav-items">Patrocinadores</a>

            <div class="box-redes">
                <p>En las redes</p>
                <div class="box-icons-redes">
                    <img class="svg-red" src="{{ asset('icons/bxl-facebook-square.svg') }}" width="35" height="28">
                    <img class="svg-red" src="{{ asset('icons/icons8-twitterx.svg') }}" width="35" height="28">
                    <img class="svg-red" src="{{ asset('icons/bxl-instagram-alt.svg') }}" width="35" height="28">
                </div>
            </div>
        </div>
    <!-- El id: componente. - Es un intermediario para usar React-->
        <div class="link-seperation">
            
            <ul class="ul-links noticia">
                <li class="li-noticias">
                    <a class="a-noticias" href="{{ url('/') }}">
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

        <div class="cabezera-show">
            <a class="a-noticia-section-show" to="/about">
                {{ $noticia->categoria }}
            </a>
            <p class="title-noticia-show">{{ $noticia->titulo }}</p>
            <p class="mini-desc-show">{{ $noticia->mini_descripcion }}</p>

            <div class="box-redaccion">
                <div class="bor-radius-redac-img">
                    <a to="/about"><img class="desktop-redac" src="{{ asset('DESKTOP.png') }}" width="50" height="70"></a>
                </div>
                <p class="txt-redaction">Redacción Vision ({{ $noticia->redactor }})</p>
            </div>
            <p class="p-fecha-public-show">{{ $noticia->created_at }}</p>
        
        </div>
    
        <div class="box-img-and-min-noticias">
            <img class="img-noticia-principal" src="{{ asset('robot.png') }}" width="50" height="28">
            <div class="box-cards-min-show">
                <div class="card-dimiuta-noticia">
                    @php
                        // Buscar la publicación más vista entre todas las publicaciones
                        $publicacionMasVista = $publicaciones->sortByDesc('visitas')->first();
                    @endphp

                    @if($publicacionMasVista)
                        <p class="vistas-leter">Vistas: {{ $publicacionMasVista->visitas }}</p>
                        <div class="box-min-not">
                            <img class="img-article-not" src="{{ asset('person.png') }}" width="50" height="28">
                            <div class="card-article-min-noticia">
                                <a class="a-min-noticia-section min">{{ $publicacionMasVista->categoria }}</a>
                                <a href="{{ route('noticia.show', ['id' => $publicacionMasVista->id]) }}" class="descript-min-not">{{ $publicacionMasVista->titulo }}</a>
                            </div>
                        </div>
                    @else
                        <p>No hay publicaciones disponibles.</p>
                    @endif
                    <div class="seperation-min-not"></div>
                </div>   
                <div class="card-dimiuta-noticia">
                    @php
                        $segundaPublicacionMasVista = $publicaciones->sortByDesc('visitas')->slice(1, 1)->first();
                    @endphp

                    @if($segundaPublicacionMasVista)
                        <p class="vistas-leter">Vistas: {{ $segundaPublicacionMasVista->visitas }}</p>
                        <div class="box-min-not">
                            <img class="img-article-not" src="{{ asset('robot.png') }}" width="50" height="28">
                            <div class="card-article-min-noticia">
                                <a class="a-min-noticia-section min">{{ $segundaPublicacionMasVista->categoria }}</a>
                                <a href="{{ route('noticia.show', ['id' => $segundaPublicacionMasVista->id]) }}" class="descript-min-not">{{ $segundaPublicacionMasVista->titulo }}</a>
                            </div>
                        </div>
                    @else
                        <p>No hay segunda publicación más vista disponible.</p>
                    @endif
                    <div class="seperation-min-not"></div>
                </div>
                <div class="card-dimiuta-noticia">
                    @php
                        $segundaPublicacionMasVista = $publicaciones->sortByDesc('visitas')->slice(2, 2)->first();
                    @endphp

                    @if($segundaPublicacionMasVista)
                        <p class="vistas-leter">Vistas: {{ $segundaPublicacionMasVista->visitas }}</p>
                        <div class="box-min-not">
                            <img class="img-article-not" src="{{ asset('person.png') }}" width="50" height="28">
                            <div class="card-article-min-noticia">
                                <a class="a-min-noticia-section min">{{ $segundaPublicacionMasVista->categoria }}</a>
                                <a href="{{ route('noticia.show', ['id' => $segundaPublicacionMasVista->id]) }}" class="descript-min-not">{{ $segundaPublicacionMasVista->titulo }}</a>
                            </div>
                        </div>
                    @else
                        <p>No hay segunda publicación más vista disponible.</p>
                    @endif
                    <div class="seperation-min-not"></div>
                </div> 
                <div class="card-dimiuta-noticia">
                    @php
                        $segundaPublicacionMasVista = $publicaciones->sortByDesc('visitas')->slice(3, 3)->first();
                    @endphp

                    @if($segundaPublicacionMasVista)
                        <p class="vistas-leter">Vistas: {{ $segundaPublicacionMasVista->visitas }}</p>
                        <div class="box-min-not">
                            <img class="img-article-not" src="{{ asset('robot.png') }}" width="50" height="28">
                            <div class="card-article-min-noticia">
                                <a class="a-min-noticia-section min">{{ $segundaPublicacionMasVista->categoria }}</a>
                                <a href="{{ route('noticia.show', ['id' => $segundaPublicacionMasVista->id]) }}" class="descript-min-not">{{ $segundaPublicacionMasVista->titulo }}</a>
                            </div>
                        </div>
                    @else
                        <p>No hay segunda publicación más vista disponible.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="group-descriptions-show">
                <p class="desc-show-not">
                    Comentarios
                </p>
            
                <p class="desc-show-not">
                {{ $noticia->descripcion }}
                </p>
                <p class="desc-show-not">
                {{ $noticia->descripcion2 }}
                </p>
            
        </div>

        @extends('layouts.footer')

        @section('footer')
        


        @endsection

    
        <script src="{{ asset('js/index.js') }}" defer></script>

   
    </body>
</html>
