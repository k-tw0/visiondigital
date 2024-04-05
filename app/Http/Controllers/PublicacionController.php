<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $publicaciones = Publicacion::where('titulo', 'LIKE', '%'.$texto.'%')
            ->orderBy('titulo', 'asc')
            ->paginate(10);

        return view('admin.admin', compact('publicaciones', 'texto'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $publicacion = new Publicacion;
        $publicacion->categoria = $request->input('categoria');
        $publicacion->ruta_imagen = $request->input('ruta_imagen');
        $publicacion->titulo = $request->input('titulo');
        $publicacion->mini_descripcion = $request->input('mini_descripcion');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->descripcion2 = $request->input('descripcion2');
        $publicacion->visitas = $request->input('visitas');
        $publicacion->redactor = $request->input('redactor');
        $publicacion->save();

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('admin.edit', compact('publicacion'));
    }

    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->categoria = $request->input('categoria');
        $publicacion->ruta_imagen = $request->input('ruta_imagen');
        $publicacion->titulo = $request->input('titulo');
        $publicacion->mini_descripcion = $request->input('mini_descripcion');
        $publicacion->descripcion = $request->input('descripcion');
        $publicacion->descripcion2 = $request->input('descripcion2');
        $publicacion->visitas = $request->input('visitas');
        $publicacion->redactor = $request->input('redactor');
        $publicacion->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect()->route('admin.index');
    }
}
