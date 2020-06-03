@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Informe de servicios</h2>
                <div class="btn-group pull-right">
                    <a href="{{ route('servicio.create') }}" class="btn btn-danger"><i class="fa fa-bars"></i>Nuevo Servicio</a>
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
                                                    <th width="50">id</th>
                                                    <th>Nombre</th>
                                                    <th>Precio</th>
                                                    <th width="100">Categoria</th>                                                   
                                                    <th>Descripcion</th>
                                                    

                                                </tr>
                                            </thead>
                                            <tbody>  
                                            @foreach($servicios as $servicio)
                                            <tr>
                                                <td>{{$servicio->id}}</td>
                                                <td>{{$servicio->NomServicio}}</td>
                                                <td>{{$servicio->Precio}}</td>
                                                <td>{{$servicio->categoria->NombCategoria}}</td>
                                                <td>{{$servicio->Descripcion}}</td>
                                                
                                                <td>
                                               
                                                <a href="{{ route('servicio.edit',['id'=>$servicio->id]) }}"><button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                        
                                                <a href="{{ route('servicio.delete',['id'=>$servicio->id]) }}"><button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                               
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Servicios</b></h2>
@endsection

@section('men')
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
@endsection