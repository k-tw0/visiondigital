<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class NoticiaController extends Controller
{
    public function show($id)
    {
        $publicaciones = Publicacion::all(); // Obtener todas las publicaciones
        $noticia = Publicacion::findOrFail($id); // Obtener la noticia específica por su ID
        return view('noticia.show', compact('noticia', 'publicaciones'));
    }
}
