$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: '/resources/views/admin/list-fac.blade.php' ,
		type: 'POST' ,
		dataType: 'php',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});



