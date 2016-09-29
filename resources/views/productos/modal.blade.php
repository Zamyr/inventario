
<div class="modal fade" id="modal-editar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar Producto</h4>
			</div>
			<div class="modal-body">
				<!-- form start -->
			    <form id='form_edit_productos'>
			    <input type="hidden" id='token' name="_token" value="{{{ csrf_token() }}}" />
			    <input type="hidden" id='id' />
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
							@foreach($cate as $ca)
								<option value="{{$ca->nombreCategoria}}">{{$ca->nombreCategoria}}</option>
							@endforeach
						</select>
			        </div>
			      </div>
			    </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<a href="javascript:;" id='editarProducto' class="btn btn-info pull-right">Editar</a>
			</div>
		</div>
	</div>
</div>