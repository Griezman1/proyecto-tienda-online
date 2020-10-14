<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgarticulos extends Model
{
    // Instancio la tabla 'img_articulos' 
    protected $table = 'img_articulos';
    
    // Declaro los campos que usaré de la tabla 'img_articulos' 
    protected $fillable = ['nombre', 'formato', 'articulos_id'];
 
    // Relación Inversa (Opcional)
    public function articulos()
    {
     return $this->belongsTo('App\articulos');
    }
}
