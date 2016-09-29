@extends('layouts.layout')

@section('content')
<div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Nuevo Producto</h3>
    </div>
    <div id="msj" class="alert alert-success" style="display: none;">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	Producto creado exitosamente
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id='form_create_productos' enctype="multipart/form-data">
    <input type="hidden" id='token' name="_token" value="{{{ csrf_token() }}}" />
      <div class="box-body">
      	<div class="form-group col-md-12">
            <label>Descripción</label>
        	<input id="descripcion" class="form-control" rows="3" placeholder="Descripcion" required="required">
        </div>
        <div class="form-group col-md-12">
            <label>Peso</label>
        	<input type='text' id="peso" class="form-control" rows="3" placeholder="Peso" required="required">
        </div>
        <div class="form-group col-md-12">
            <label>Precio</label>
        	<input type='number' id="precio" class="form-control" rows="3" placeholder="Precio" required="required">
        </div>
        <div class="form-group col-md-12">
            <label>Cantidad</label>
        	<input id="cantidad" class="form-control" rows="3" placeholder="Cantidad" required="required">
        </div>
        <div class="form-group col-md-12">
            <label>Categoria</label>
        	<select id='categoria_id' class="form-control" required="required">
    				<option value="">Seleccione una categoria</option>
    				@foreach($cat as $ca)
    					<option value="{{$ca->nombreCategoria}}">{{$ca->nombreCategoria}}</option>
    				@endforeach
    			</select>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="reset" class="btn btn-default">Cancel</button>
        <a href="javascript:;" id='crearProducto' class="btn btn-info pull-right">Crear</a>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>
@endsection