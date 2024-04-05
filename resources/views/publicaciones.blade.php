
@foreach($publicaciones as $publicacion)
    @if($publicacion->categoria === 'Ciberseguridad')
        <h2>{{ $publicacion->titulo }}</h2>
        <p>{{ $publicacion->descripcion }}</p>
        <p>Categoría: {{ $publicacion->categoria }}</p>
        <p>Fecha de creación: {{ $publicacion->created_at }}</p>
        <hr>
    @endif
@endforeach