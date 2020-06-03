<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $table='clientes';

    protected $fillable = ['Nombre','Direccion','Telefono','Email','Especial','ClientesCol'];


    protected $hidden = [
        'remember_token', 'create_at', 'update_at' 
   ];

    public function orden_trabajos(){
        return $this->hasMany('App\Models\Orden_trabajo');
    }

    public function servicios(){
        return $this->belongsToMany('App\Models\Servicio');
    }

    
}
