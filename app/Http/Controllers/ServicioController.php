<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicioRequest;
use App\Models\Servicio;
use App\Models\Categoria;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios=Servicio::all();
        
        return view('servicios.index',['servicios'=>$servicios]);

    }

  
    public function create()
    {   
        $categorias=Categoria::all();
        return view('servicios.create')
         ->with('categorias',$categorias);

        
    }

  
    public function store(ServicioRequest $request)
    {
        
        $datos=$request->all();
        $servicios = new Servicio;
        $servicios->NomServicio=$request->input('NomServicio');
        $servicios->Precio=$request->input('Precio');
        $servicios->categoria_id=$request->input('categoria_id');   
        $servicios->Descripcion=$request->input('Descripcion');   
        $servicios->save();
    
        
        return redirect()->action('ServicioController@index');
    }

  
    public function show($id)
    {
        
    }

    public function edit($id)
    {
       
        $categorias = Categoria::all();
        $servicio = Servicio::find($id);
        return view('servicios.editar')->with('servicio',$servicio)       
        ->with('categorias',$categorias);
    }

  


    public function update(Request $request, $id)
    {
        $servicios=Servicio::find($id);
        $datos=array();
        $datos['NomServicio']=$request->input('NomServicio');
        $datos['Precio']=$request->input('Precio');
        $datos['categoria_id']=$request->input('categoria_id');
        $datos['Descripcion']=$request->input('Descripcion');
        $productos->update($datos); 
               
        return redirect()->action('ServicioController@index');
    }

    
    public function delete($id)
    {
        $servicios = Servicio::find($id);
        $servicios->delete();
        return redirect()->route('servicios.index');
    }
}
