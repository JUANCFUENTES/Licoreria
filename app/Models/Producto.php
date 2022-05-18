<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function archivos(){
        return $this->hasMany(Archivo::class);
    }


    protected function nombre(): Attribute  //Accessors, Muttators
    {
        return Attribute::make(
            set: fn ($value) => ucfirst(strtolower($value)),  //Guardar un dato inciando con mayuscula en la BD
        );
    }
}
