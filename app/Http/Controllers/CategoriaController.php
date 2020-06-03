<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;
class CategoriaController extends Controller
{
    public function index(){
        
        $categorias=Categoria::all();
        return view('categorias.index' ,['categorias'=>$categorias]);
    }

	public function create(){
        $categorias=Categoria::all();
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request){
        $categorias = new Categoria;
        $categorias->NombCategoria = $request->input('NombCategoria');
        $categorias->Descripcion =$request->input('Descripcion');
        $categorias->save();
        return redirect()->route('categorias.index');
    }

    public function edit($id){
        $categoria=CAtegoria::find($id);
        return view('categorias.edit')->with('categoria',$categoria);
    }

    public function update(CategoriaRequest $request,$id){
        $categoria= Categoria::find($id);
        
        $datos=array();
        $datos['NombCategoria']=$request->input('NombCategoria');
        $datos['Descripcion']=$request->input('Descripcion');
        $categoria->update($datos);
        return redirect()->route('categorias.index');
    }

    public function delete($id){
        $categoria=Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
