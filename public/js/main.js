$(document).ready(function() {
	// Guardar nuevo producto
	$('#crearProducto').click(function()
	{

		if($('#descripcion').val() == '' || $('#peso').val() == '' || $('#precio').val() == '' || $('#cantidad').val() == '' ||
		 $('#categoria_id').val() == '')
		{
			alert('Debe llenar todos los campos');
		}else
		{
			var des = $('#descripcion').val();
			var pes = $('#peso').val();
			var pre = $('#precio').val();
			var can = $('#cantidad').val();
			var cat = $('#categoria_id').val();
			var token = $('#token').val();
			var route = 'http://localhost:8000/productos/store';
			$.ajax({
				url:route,
				headers:{'X.CSRF-TOKEN':token},
				type:'POST',
				dataType:'json',
				data:{descripcion:des, peso:pes, 
					precio:pre, cantidad:can, categoria_id:cat, imagen:img},

				success:function()
				{
					$('#descripcion').val('');
					$('#peso').val('');
					$('#precio').val('');
					$('#cantidad').val('');
					$('#categoria_id').val('');
					setTimeout(function()
					{
						$('#msj').fadeIn();
					}, 1000);
					setTimeout(function()
					{
						$('#msj').fadeOut();
					}, 6000);

				}
			});

			
		}
	});

	
});

$(document).ready(function() {
	Carga();
});

function Carga()
{
	//listar productos
	var tablaDatos = $('#datos');
	var route = 'http://localhost:8000/listar';

	$("#datos").empty();
	$.get(route, function(res)
	{
		$(res).each(function(key,value) {
			tablaDatos.append('<tr><td>'+value.id+'</td><td>'+
				value.descripcion+'</td><td>'+value.peso+'</td><td>'+
				value.precio+'</td><td>'+value.cantidad+'</td><td>'+
				value.categoria_id+'</td><td><a data-toggle="modal" href="#modal-editar"><button id="btn" value='+value.id+' OnClick="Mostrar(this);" class="btn btn-primary">Editar</button></a></td><td><a href="" data-target="#modal-delete-"'+
				value.id+'" data-toggle="modal"><button value='+value.id+' OnClick="Eliminar(this);" class="btn btn-danger">Eliminar</button></a></td></tr>');
		});
		// console.log('test');
	});
}

function Mostrar(btn)
{
	var route = "http://localhost:8000/productos/"+btn.value+"/edit";

	$.get(route, function(res)
		{
			$('#descripcion').val(res.descripcion);
			$('#peso').val(res.peso);
			$('#precio').val(res.precio);
			$('#cantidad').val(res.cantidad);
			$('#categoria_id').val(res.categoria_id);
			$('#id').val(res.id);
		});
}

$('#editarProducto').click(function()
	{
		var value = $('#id').val();
		var des = $('#descripcion').val();
		var pe = $('#peso').val();
		var pre = $('#precio').val();
		var can = $('#cantidad').val();
		var cate = $('#categoria_id').val();
		var token = $('#token').val();
		var route = "http://localhost:8000/productos/"+value+"";

		$.ajax({
			url:route,
			headers: {'X.CSRF-TOKEN':token},
			type: 'POST',
			dataType:'json',
			data:{descripcion:des, peso:pe, 
					precio:pre, cantidad:can, categoria_id:cate},
			success:function()
			{
				Carga();
				$('#modal-editar').modal('toggle');
				setTimeout(function()
				{
					$('#msj').fadeIn();
				}, 1000);
				setTimeout(function()
				{
					$('#msj').fadeOut();
				}, 6000);
			}
		});
	});

function Eliminar(btn)
{
	var token = $('#token').val();
	var route = "http://localhost:8000/productos/"+btn.value+"";

	$.ajax({
		url:route,
		headers: {'X.CSRF-TOKEN':token},
		type: 'POST',
		dataType:'json',
		success:function()
		{
			Carga();
			setTimeout(function()
			{
				$('#msj-delete').fadeIn();
			}, 1000);
			setTimeout(function()
			{
				$('#msj-delete').fadeOut();
			}, 6000);
		}
	});
}