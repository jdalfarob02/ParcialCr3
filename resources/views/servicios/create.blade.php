@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('servicio.store')}}" method="POST">
          {{csrf_field()}}
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Nuevo Servicio</b></h3>
              <ul class="panel-controls">
              <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>

            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Nombre:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" id="NomServicio" require name="NomServicio" class="form-control" placeholder="Nombre Del Servicio"/>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Precio:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" id="Precio" require name="Precio" class="form-control" placeholder="Precio del Servicio"/>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Categoria</label>
                      <div class="col-md-6 col-xs-12">                                             
                          <select class="form-control select" require data-live-search="true" id="categoria_id" name="categoria_id">
                              <option selected disabled value="0">==seleccione==</option>
                              @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->NombCategoria}}</option>
                              @endforeach  
                          </select>
                         
                      </div>
                      <div class="form-group">
                      <label class="col-md-3 control-label"> Descripción</label>
                        <div class="col-md-9 col-xs-12">                                            
                          <textarea class="form-control" require rows="6" placeholder="descripción del Servicio" id="Descripcion" name="Descripcion"></textarea>
                        </div>
                    </div>
                   

                    
                     
                    </div>
                </div>
              </div>
              </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('servicios.index')}}" class="btn btn-default">Cancelar</a>
              <button type='submit 'class="btn btn-info pull-right">Registrar</button>
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

@section('menu')
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
@endsection