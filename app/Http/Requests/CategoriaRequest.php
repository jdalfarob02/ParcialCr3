<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            
            'NombCategoria'=>'required|alpha|min:5|max:150',
            'Descripcion'=>'required|alpha|min:5|max:150',


        ];

    }

    public function attributes()
    {
        return [
            
            'NombCategoria'=>'Nombre de la Categoria',
            'Descripcion'=>'Descripcion de la categoria',
           
                                  
        ];
    }
    public function messages()
    {
        return[
            
            'NombCategoria.required' => ':attribute es requerido ',
            'NombCategoria.alpha' =>' :attribute debe ser solo letras',
            'NombCategoria.min' => ' :attribute deben contener por lo menos 5 caracteres',
            'NombCategoria.max' =>' :attribute deben contener al menos 5 caracteres',

            'Descripcion.required' => ':attribute es requerido ',
            
            'Descripcion.alpha' =>' :attribute deben ser solo letras',
            'Descripcion.min' => ' :attribute deben contener por lo menos 5 caracteres',
            'Descripcion.max' =>' :attribute deben ingresar al menos 5 caracteres',
        ];
    }


}
