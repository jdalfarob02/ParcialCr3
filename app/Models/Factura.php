<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='facturas';

    protected $fillable = [ 'Total','Abono','Saldo','Estado','servicio_id'];

    protected $hidden = [
        'remember_token', 'create_at', 'update_at' 
   ];
   
    public function orden_trabajo(){
        return $this->belongsTo('App\Models\Orden_trabajo');
        
    }


    public function detalle_facturas()
    {
        return $this->hasMany('App\Models\Detalle_factura');
    }


   
}
