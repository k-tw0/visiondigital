<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
    <link rel="stylesheet" href="{{ asset('css/bulma/bulma.min.css') }}"> <!-- Bulma-->
    <link rel="stylesheet" href="{{ asset('css/home/structure.css') }}">
</head>

<style>
.card {
    max-width: 50%;
    padding: 1em;
    top: 40px;
    left: 40px;
}

.buttons .button {
    margin-top: 1rem;
}

.form-editer{
    margin: auto;
}
.input, .input:focus {
    width: 100%;
    background-color: #39a2a71a;
}
.textarea, .textarea:focus{
    background-color: #3960a71a;
}

.textarea:focus{
    border: 3px solid #777;
}

.button.is-primary {
    font-size: 13px;
}
.button.is-ghost {
    font-size: 13px;
}
</style>

<body>
    <div class="card form-editer">
        <div class="card-content">
            <div class="field">
                <form action="{{ route('admin.update', $publicacion->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- indica que los datos son confiables -->
                    <label class="label">Categoría</label>
                    <div class="control">
                        <input class="input" type="text" name="categoria" placeholder="Categoría" required maxlength="50" value="{{ $publicacion->categoria }}">
                    </div>
                    <label class="label">Ruta de Imagen</label>
                    <div class="control">
                        <input class="input" type="text" name="ruta_imagen" placeholder="Ruta de Imagen" required maxlength="255" value="{{ $publicacion->ruta_imagen }}">
                    </div>
                    <label class="label">Título</label>
                    <div class="control">
                        <input class="input" type="text" name="titulo" placeholder="Título" required maxlength="255" value="{{ $publicacion->titulo }}">
                    </div>
                    <label class="label">Mini Descripción</label>
                    <div class="control">
                        <textarea class="textarea" name="mini_descripcion" placeholder="Mini Descripción" >{{ $publicacion->mini_descripcion }}</textarea>
                    </div>
                    <label class="label">Descripción</label>
                    <div class="control">
                        <textarea class="textarea" name="descripcion" placeholder="Descripción" >{{ $publicacion->descripcion }}</textarea>
                    </div>
                    <label class="label">Descripción 2</label>
                    <div class="control">
                        <textarea class="textarea" name="descripcion2" placeholder="Descripción 2" >{{ $publicacion->descripcion2 }}</textarea>
                    </div>
                    <label class="label">Visitas</label>
                    <div class="control">
                        <input class="input" type="number" name="visitas" placeholder="Visitas" required value="{{ $publicacion->visitas }}">
                    </div>
                    <label class="label">Redactor</label>
                    <div class="control">
                        <input class="input" type="text" name="redactor" placeholder="Redactor" required maxlength="50" value="{{ $publicacion->redactor }}">
                    </div>
                    
                    <div class="buttons">
                        <button class="button is-primary" value="guardar">Guardar</button>
                        <a class="button is-ghost" href="javascript:history.back()">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @extends('layouts.footer')

    @section('footer')
    


    @endsection
</body>

</html>