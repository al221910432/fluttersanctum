<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //use HasFactory;
    
    protected $table ="productos";
    protected $primaryKey ="id";
    protected $id;
    protected $clave;
    protected $producto;
    protected $existencias;
    protected $precio_unitario;
    protected $unidad_de_medida;
    protected $estatus;
}
