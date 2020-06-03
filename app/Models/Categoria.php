<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categorias';

    protected $fillable = ['NombCategoria', 'Descripcion'];

    
    protected $hidden = [
         'remember_token', 'create_at', 'update_at' 
    ];

    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio');
    }

}
