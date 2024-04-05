<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion; // Cambiando el modelo a Publicacion
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $publicaciones = DB::table('publics') // Cambiando el nombre de la tabla a 'publics'
            ->select('id', 'categoria', 'ruta_imagen', 'titulo', 'mini_descripcion', 'descripcion', 'descripcion2', 'visitas', 'redactor') // Actualizando los nombres de los campos
            ->where('titulo', 'LIKE', '%'.$texto.'%') // Puedes ajustar la condición según sea necesario
            ->orderBy('titulo', 'asc') // Cambiando el campo de ordenamiento si es necesario
            ->paginate(10);

        return view('admin.admin', compact('publicaciones', 'texto')); // Ajustando la variable compacta para la vista
    }
}
