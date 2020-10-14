<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    // Instancio la tabla 'articulos' 
    protected $table = 'articulos';
    
    // Declaro los campos que usaré de la tabla 'articulo' 
    protected $fillable = ['nombre', 'precio', 'cantidad', 'imagenes', 'url'];
 
    // Relación One to Many (Uno a muchos), un registro puede tephp artisan make:model Imgbicicletas ner muchas imágenes 
    public function imagenesarticulos()
    {
        return $this->hasMany('App\Imgarticulos');
    }
}
