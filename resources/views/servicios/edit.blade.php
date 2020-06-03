@extends('plantilla.plantilla')
@section('titulo','Admin °| laravel')
@section('contenido')
<!-- START RESPONSIVE TABLES -->
<div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" method="POST" action="{{ route('servicio.update',['id'=>$servicio->id]) }}" >
        {{csrf_field()}}
        <!--<input type="hidden" name="_method" value="PATCH">-->
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Servicio</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
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
                                <input type="text" id="NomServicio" name="NomServicio" class="form-control" value="{{$servicio->NomServicio}}"placeholder="Nombre Del Servicio"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Precio:</label>
                        <div class="col-md-9 col-xs-12">                                            
                          <textarea class="form-control" rows="6" placeholder="descripción Sercicio" id="Precio" name="Precio">{{$servico->Precio}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Categoria</label>
                      <div class="col-md-6 col-xs-12">                                             
                          <select class="form-control select" data-live-search="true" id="categoria_id" name="categoria_id">
                              <option selected disabled value="0">==seleccione==</option>
                              @foreach($categorias as $categoria)
                                @if($servicio->categoria_id==$categoria->id)
                                <option value="{{$categoria->id}}" selected>{{$categoria->NombCategoria}}</option>
                                @else
                                <option value="{{$categoria->id}}">{{$categoria->NombCategoria}}</option>
                                @endif
                              @endforeach 
                          </select>
                         
                          
                      </div>
                      
                    </div>

                  
                </div>
              </div>
              </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('servicios.index')}}" class="btn btn-default">Cancelar</a>
              <button type='submit'class="btn btn-info pull-right">Editar</button>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Editar</b></h2>
@endsection

@section('menu')
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
@endsection