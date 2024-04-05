@extends('layouts.admin')

@section('creatorContent')
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/admin') }}">
            <img src="{{ asset('DESKTOP.png') }}" width="50" height="28" max-height="none">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" id="inicioID">
                Noticias
            </a>

            <a class="navbar-item" id="deportesID">
                Estadisticas
            </a>
            <a class="navbar-item" id="negociosID">
                Clientes
            </a>

        </div>

        <div class="navbar-end">

            <div class="navbar-item">
                <div class="buttons">

                    <button class="button is-ghost"> {{ Auth::user()->name }}</button>
                    <a href="{{ route('logout') }}" class=" button is-danger is-light"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="panel-block">
    <!--Llamamos al metodo admin.index el controlador-->
    <form action="{{route('admin.index')}}" method="get">
        <!--El moetodo al final de la peticion get-->
        <p class="control has-icons-left">
            <button class="button is-link is-focused">Buscar</button>
            <a href="{{route('admin.create')}}" class="button is-warning is-focused">Nuevo</a>
            <input class="input" type="text" placeholder="Search" name="texto" value="{{$texto}}">




            <span class="icon is-left">
                <i class="fas fa-search" aria-hidden="true"></i>
            </span>

        </p>


    </form>

</div>

<table class="table">
    <thead>
        <tr>
            <th>Opciones</th>
            <th>ID</th>
            <th>Categoría</th>
            <th>Ruta de Imagen</th>
            <th>Título</th>
            <th>Mini Descripción</th>
            <th>Descripción</th>
            <th>Descripción 2</th>
            <th>Visitas</th>
            <th>Redactor</th>
        </tr>
    </thead>
    <tbody>
        @if(count($publicaciones) <= 0)
        <tr>
            <td colspan="10">No hay resultados</td>
        </tr>
        @else
        @foreach ($publicaciones as $publicacion)
        <tr>
            <td>
                <a class="button is-small is-link is-inverted" href="{{ route('admin.edit', $publicacion->id) }}">Editar</a>
                <!-- Enlace para eliminar -->
            </td>
            <td>{{ $publicacion->id }}</td>
            <td>{{ $publicacion->categoria }}</td>
            <td>{{ $publicacion->ruta_imagen }}</td>
            <td>{{ $publicacion->titulo }}</td>
            <td>{{ $publicacion->mini_descripcion }}</td>
            <td>{{ $publicacion->descripcion }}</td>
            <td>{{ $publicacion->descripcion2 }}</td>
            <td>{{ $publicacion->visitas }}</td>
            <td>{{ $publicacion->redactor }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
{{ $publicaciones->links() }}

<!-- maquetamos la paginacion para cuando sobre salga de lo requerido -->
@endsection