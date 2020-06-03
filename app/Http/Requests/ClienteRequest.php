<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
          
            'Nombre'=>'required|alpha|min:5|max:150',
            'Direccion'=>'required|alpha|min:5|max:150',
            'Telefono' => 'integer|numeric|nullable',
            'Email'=>'required|email:rfc',
            'Telefono' => 'integer|numeric|nullable',
            'Especial' => 'integer|numeric|min:1',
            'ClientesCol' => 'required|alpha|min:2|max:45',

        ];
    }


    public function attributes()
    {
        return [
           
            'Nombre'=>'Nombre Del Cliente',
            'Direccion'=>'Direccion del Cliente',
            'Telefono' =>'telefono Del Cliente',
            'Email'=>'Correo Electronico',
            'Especial' => 'especial',
            'ClientesCol' => 'Clientescol'
                                  
        ];
    }

    public function messages()
    {
        return[
            

            'Nombre.required' => 'El:attribute es requerido ',
            'Nombre.alpha' =>' El:attribute deben ser solo letras',
            'Nombre.min' => ' El:attribute deben contener por lo menos 5 caracteres',
            'Nombre.max' =>'El :attribute deben contener al menos 5 caracteres',

            'Direccion.required' => 'La :attribute tiene que ingresarla ',
            
            'Direccion.alpha' =>'Los :attribute deben ser solo letras',
            'Direccion.min' => 'Los :attribute deben contener por lo menos 5 caracteres',
            'Direccion.max' =>'Los :attribute deben ingresar al menos 5 caracteres',
            'telefono.integer' => 'El :attribute solo acepta numeros',
            'telefono.numeric' => 'El :attribute debe contener caracteres numericos',
            'email.required' => 'El attribute es requerido',
            'email.email' =>'El :attribute tiene formato erroneo',
            'email.unique' => 'El :attribute ya existe',
            'Especial.required' => 'el :atributte es Requerido',
            'ClientesCol' => 'es :atributte es Requerido'
        ];
    }
}
