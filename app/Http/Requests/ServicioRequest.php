<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            
            'NomServicio'=>'required|alpha|min:5|max:150',
            'Precio'=>'required|alpha|min:5|max:150',
            'categoria_id' => 'integer|numeric',
            'Descripcion '=> 'required|alpha|min:5|max:45'
        ];
    }

    
    public function attributes()
    {
        return [
            
            'NombServicio'=>'Nombre del servicio',
            'Precio'=>'precio del servicio',
            'categoria_id' =>'categoria',
            'Descipcion'=>'descripcion del servicio'
                                  
        ];
    }
    public function messages()
    {
        return[
            

            'NombServicio.required' => ':attribute es requerido ',
            'NombServicio.alpha' =>':attribute deben ser solo letras',
            'NombServicio.min' => ' :attribute deben contener por lo menos 5 caracteres',
            'NombServicio.max' =>' :attribute deben contener al menos 5 caracteres',

            'Descripcion.required' => 'Los :attribute tiene que ingresarlos ',
            
            'Descripcion.alpha' =>'Los :attribute deben ser solo letras',
            'Descripcion.min' => 'Los :attribute deben contener por lo menos 5 caracteres',
            'Descripcion.max' =>'Los :attribute deben ingresar al menos 5 caracteres',
            'Precio.integer' => 'El :attribute solo acepta numeros',
            'Precio.numeric' => ' El:attribute debe contener caracteres numericos',
            'categoria_id.required' => ':attribute tiene que seleccionar una ',
            
            'categoria_id.alpha' =>'La :attribute deben ser solo letras',
            'categoria_id.min' => 'La  :attribute deben contener por lo menos 5 caracteres',
            'categoria_id.max' =>'La :attribute deben ingresar al menos 5 caracteres',
            
        ];
    }
}
