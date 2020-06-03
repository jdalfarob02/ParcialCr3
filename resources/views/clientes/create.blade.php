@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->

<div class="row">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Tienes errores en estos campos!.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
</div>
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('cliente.store')}}" method="POST">
          @csrf
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Nuevo cliente</b></h3>
              <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Nombre:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="Nombre" name="Nombre" class="form-control" placeholder="Nombre del cliente"/>
                            </div>
                    </div>    
                </div>       
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Direccion:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="Direccion" name="Direccion" class="form-control" placeholder="Direccion del cliente"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Telefono:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="Telefono" name="Telefono" class="form-control" placeholder="Telefono del cliente"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Email:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="Email" name="Email" class="form-control" placeholder="Correo del cliente"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> especial:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="Especial" name="Especial" class="form-control" placeholder="Cliente especial"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"> Clientescol:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="ClientesCol" name="ClientesCol" class="form-control" placeholder="clientesCol"/>
                            </div>
                        </div>
                    </div>
                              
              </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('clientes.index')}}" class="btn btn-default">Cancelar</a>
              <button type="submit" class="btn btn-info pull-right">Registrar</button>
            </div>
          </div>
        </form>
      </div>
</div>
<!-- END RESPONSIVE TABLES -->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registrar</b></h2>
@endsection

@section('menubar')
    <li><a href="#">Home</a></li>                    
    <li class="active">Cliente</li>
@endsection