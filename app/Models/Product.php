<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['title','image_url','description','price'];

    // Metodo que indica hacia donde va la peticion
    public function url(){
        // se ve si el objeto se guardo en la bd o no
        return $this->id ? 'productos.update': 'productos.store';
    }

    // Devuelve el metodo Http con el que tengo que hacer la peticion 
    public function method(){
        return $this->id ? 'PUT': 'POST';
    }  
}
