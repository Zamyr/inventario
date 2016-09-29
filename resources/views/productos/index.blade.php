@extends('layouts.layout')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos <a href="{{url('productos/create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>
<div id="msj" class="alert alert-success" style="display: none;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	Producto editado exitosamente
</div>
<div id="msj-delete" class="alert alert-success" style="display: none;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	Producto borrado exitosamente
</div>
@include('productos.modal')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Productos</h3>
	</div>
	<div class="box-body">
		<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>DESCRIPCIÓN</th>
					<th>PESO</th>
					<th>PRECIO</th>
					<th>CANTIDAD</th>
					<th>CATEGORIA</th>
					<th>IMAGEN</th>
					<th></th>
				</thead>
					<tbody id='datos'></tbody>
			</table>
		</div>
	</div>
</div>
	</div>
	<!-- /.box-body -->
</div>
@endsection