<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = 'publics';

    // Definir los campos de la tabla
    protected $fillable = ['categoria', 'ruta_imagen', 'titulo', 'mini_descripcion', 'descripcion', 'descripcion2', 'visitas', 'redactor'];
}