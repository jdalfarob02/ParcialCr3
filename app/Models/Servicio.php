<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table='servicios';

    protected $fillable = ['NomServicio','Precio','categoria_id', 'Descripcion'];

    protected $hidden = [
        'remember_token', 'create_at', 'update_at' 
   ];
    public function categoria()
    {
        return $this->belongsTo('App\models\Categoria');
    }
    public function clientes(){
        return $this->belongsToMany('App\Models\Cliente');
    }
}
