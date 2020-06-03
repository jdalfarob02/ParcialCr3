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
        <form class="form-horizontal" id="formcliente" name="formcliente" action="{{route('categoria.update',['id'=>$categoria->id]) }}" method="POST">
          <div class="panel panel-warning">
            @csrf
          <!--<input type="hidden" name="_method" value="PATCH">-->
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Editar Datos De Categoria</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Categoria:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="NombCategoria" name="NombCategoria" class="form-control" placeholder="Nombre de la Categoria" value="{{$categoria->NombCategoria}}"/>
                            </div>
                        </div>
                        
                        <label class="col-md-2 control-label"> Descripcion:</label>
                        <div class="col-md-9">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" require id="Descripcion" name="Descripcion" class="form-control" placeholder="Descripcion" value="{{$categoria->Descripcion}}"/>
                            </div>
                        </div>

                    </div>
                </div>
              </div>
              </div><!--fin panel body-->
              <div class="panel-footer">
              <a href="{{route('categorias.index')}}" class="btn btn-default">Cancelar</a>
              <button class="btn btn-info pull-right">Editar</button>
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

@section('men')
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
@endsection