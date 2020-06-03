@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Informe de clientes </h2>
                <div class="btn-group pull-right">
                    <a href="{{route('clientes.create')}}" class="btn btn-danger"><i class="fa fa-bars"></i>Nuevo Cliente</a>
                </div>                                                       
            </div>
            <div class="panel-body panel-body-table">                                
                <!-- START RESPONSIVE TABLES -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                        <table class="table datatable table-bordered table-striped table-actions">
                                            <thead> 
                                                <tr>
                                                    <th width="90">id</th>
                                                    <th class="text-center">Cliente</th>
                                                    <th width="200">Direccion</th>
                                                    <th width="200">Telefono</th>
                                                    <th width="200">Email</th>
                                                    <th width="200">Especial</th>
                                                    <th width="200">ClientesCol</th>

                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                @foreach($clientes as $cliente)
                                              <tr>
                                                <td>{{$cliente->id}}</td>
                                                <td>{{$cliente->Nombre}}</td>
                                                <td>{{$cliente->Direccion}}</td>
                                                <td>{{$cliente->Telefono}}</td>
                                                <td>{{$cliente->Email}}</td>
                                                <td>{{$cliente->Especial}}</td>
                                                <td>{{$cliente->ClientesCol}}</td>
                                                            

                                                <td>
                                                  <a href="{{route('clientes.edit',['id'=>$cliente->id])}}" class="btn btn-info btn-sm">Editar</a>
                                                  <a href="{{route('cliente.delete',['id'=>$cliente->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
                                                </td>
                                              </tr>
                                            @endforeach
                                            </tbody>
                                        </table>                               
                                </div>
                            </div>                                                
                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->                                        
            </div>
        </div>
    </div>
</div>
<!-- END RESPONSIVE TABLES -->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>clientes</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>                    
    <li class="active">clientes</li>
@endsection