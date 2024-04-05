    @section('contenido')
    <div>
        Contenido del layout
    </div>
    @show
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-menu">
            <div class="navbar-start">
                <div class="box-new" id="menuIcon">
                    <img class="burguer-svg" src="lol.svg" width="50" height="28">
                    <p class="p-svg-menu">MENÚ</p>
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

    <!-- Menu desplegable -->
    <div id="menuContent" class="menu-content">

        <div class="box-nav-footer">
            <img class="img-principal menu" src="DESKTOP.png" width="35" height="28">
            <img class="equis-menu" id="id-equis-menu" src="icons/bxs-x-circle.svg" width="30" height="28">
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
                <img class="svg-red" src="icons/bxl-facebook-square.svg" width="35" height="28">
                <img class="svg-red" src="icons/icons8-twitterx.svg" width="35" height="28">
                <img class="svg-red" src="icons/bxl-instagram-alt.svg" width="35" height="28">
            </div>
        </div>
    </div>
    <!-- El id: componente. - Es un intermediario para usar React-->
    <div class="link-seperation">
        
        <ul class="ul-links">
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
                <a class="a-noticias TECNOLOGIA" href="{{ url('/tecnologia') }}">
                    TECNOLOGÍA
                </a>
            </li>
        </ul>
    </div>
    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
            TECNOLOGÍA
        </p>
        </div>
    </section>
    <div class="box-publicidad">
        <p class="p-publicidad">publicidad</p>

    </div>