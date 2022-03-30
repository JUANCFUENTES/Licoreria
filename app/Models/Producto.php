<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'descripcion', 'contenido', 'categoria_id']; //Se agregan los campos que el usuario manipulara

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function sucursals(){
        return $this->belongsToMany(Sucursal::class)->withPivot('existencias')->withTimestamps();
    }
}
