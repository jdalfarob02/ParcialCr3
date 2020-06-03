<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_factura extends Model
{
    
    protected $table='detalle_facturas';

    protected $fillable = [ 'factura_id', 'valor'];

    protected $hidden = [
        'remember_token', 'create_at', 'update_at' 
   ];


    public function factura()
    {
        return $this->belongsTo('App\Models\Factura');
    }


}
