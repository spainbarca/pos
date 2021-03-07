/* EDITAR CATEGORÍA */
$(".btnEditarCategoria").click(function(){

	var idCategoria = $(this).attr("idCategoria");

	var datos = new FormData();
	datos.append("idCategoria", idCategoria);

	$.ajax({
		url: "Ajax/categorias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#editarCategoria").val(respuesta["categoria"]);
			$("#idCategoria").val(respuesta["id"]);
		}
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
})

/* ELIMINAR CATEGORÍA */
$(".btnEliminarCategoria").click(function(){

	var idCategoria = $(this).attr("idCategoria");

	swal({
		title: 				'¿Está seguro de eliminar la categoría?',
		text: 				'¡Si no lo está, puede cancelar la acción!',
		type: 				'warning',
		showCancelButton: 	true,
		confirmButtonColor: '#3085d6',   
		cancelButtonColor: 	'#d33',
		cancelButtonText: 	'Cancelar',
		confirmButtonText: 	'¡Si, eliminar categoría!'  
	}).then(function(result){

		if(result.value){
			window.location = "index.php?ruta=categorias&idCategoria="+idCategoria;
		}
	})
})