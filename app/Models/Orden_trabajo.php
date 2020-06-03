<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden_trabajo extends Model
{
    protected $table='orden_trabajos';

    protected $fillable = ['nombre','detalle','fecha_entrada','fecha_salida','cliente_id'];

    protected $hidden = [
        'remember_token', 'create_at', 'update_at' 
   ];
   
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }


    public function facturas(){
        return $this->hasMany('App\Models\Factura');
        
    }

}
