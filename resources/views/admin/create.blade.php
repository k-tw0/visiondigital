<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir cliente</title>
    <link rel="stylesheet" href="{{ asset('css/bulma/bulma.min.css') }}"> <!-- Bulma-->
    <link rel="stylesheet" href="{{ asset('css/home/structure.css') }}">
</head>

<style>
    .form-create{
        margin:auto;
    }
.card {
    max-width: 50%;
    padding: 1em;
    top: 40px;
    left: 40px;
}

.buttons .button {
    margin-top: 1rem;
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
    <div class="card form-create">
        <div class="card-content">
            <div class="field">
                <form action="{{ route('admin.store') }}" method="post">
                    @csrf
                    <!-- indica que los datos son confiables -->
                    <label class="label">Categoría</label>
                    <div class="control">
                        <input class="input" type="text" name="categoria"  required maxlength="50">
                    </div>
                    <label class="label">Ruta de Imagen</label>
                    <div class="control">
                        <input class="input" type="text" name="ruta_imagen"  required maxlength="255">
                    </div>
                    <label class="label">Título</label>
                    <div class="control">
                        <input class="input" type="text" name="titulo"  required maxlength="255">
                    </div>
                    <label class="label">Mini Descripción</label>
                    <div class="control">
                        <textarea class="textarea" name="mini_descripcion"  ></textarea>
                    </div>
                    <label class="label">Descripción</label>
                    <div class="control">
                        <textarea class="textarea" name="descripcion"  ></textarea>
                    </div>
                    <label class="label">Descripción 2</label>
                    <div class="control">
                        <textarea class="textarea" name="descripcion2"  ></textarea>
                    </div>
                    <label class="label">Visitas</label>
                    <div class="control">
                        <input class="input" type="number" name="visitas"  required>
                    </div>
                    <label class="label">Redactor</label>
                    <div class="control">
                        <input class="input" type="text" name="redactor"  required maxlength="50">
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