<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function index(){
        
        $clientes=Cliente::all();
        return view('clientes.index' ,['clientes'=>$clientes]);
    }

	public function create(){
        $clientes=Cliente::all();
        return view('clientes.create');
    }

    public function store(ClienteRequest $request){
        $clientes = new Cliente;
        $clientes->Nombre = $request->input('Nombre');
        $clientes->Direccion =$request->input('Direccion');
        $clientes->Telefono =$request->input('Telefono');
        $clientes->Email =$request->input('Email');
        $clientes->Especial =$request->input('Especial');
        $clientes->ClientesCol =$request->input('ClientesCol');
        $clientes->save();
        return redirect()->route('clientes.index');
    }

    public function edit($id){
        $cliente=Cliente::find($id);
        return view('clientes.edit')->with('cliente',$cliente);
    }

    public function update(ClienteRequest $request,$id){
        $cliente= Cliente::find($id);
        
        $datos=array();
        $datos['Nombre']=$request->input('Nombre');
        $datos['Direccion']=$request->input('Direccion');
        $datos['Telefono']=$request->input('Telefono');
        $datos['Email']=$request->input('Email');
        $datos['Especial']=$request->input('Especial');
        $datos['ClientesCol']=$request->input('ClientesCol');
        $cliente->update($datos);
        return redirect()->route('clientes.index');
    }

    public function delete($id){
        $cliente=Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
