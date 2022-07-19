function agregaform(datos){

	d=datos.split('||');

	$('#id').val(d[1]);
	$('#dispositivou').val(d[2]);
	$('#estadorecu').val(d[3]);
	$('#estadopcu').val(d[4]);
	$('#estadoscratchu').val(d[5]);
	$('#estadomovilidadu').val(d[6]);
	$('#estadoenfoqueu').val(d[7]);
	$('#estadovisionu').val(d[8]);
	$('#estadoobservacionu').val(d[9]);
}

 
function actualizaDatos(){


	id=$('#id').val();
	dispositivo=$('#dispositivou').val();
	rec=$('#estadorecu').val();
	pc=$('#estadopcu').val();
	scratch=$('#estadoscratchu').val();
	movilidad=$('#estadomovilidadu').val();
	enfoque=$('#estadoenfoqueu').val();
	vision=$('#estadovisionu').val();
	observacion=$('#estadoobservacionu').val();
	
	

	cadena= "estadoid=" + id +
			"&dispositivofk=" + dispositivo + 
			"&estadorec=" + rec +
			"&estadopc=" + pc +
			"&estadoscratch=" + scratch +
			"&estadomovilidad=" + movilidad +
			"&estadoenfoque=" + enfoque +
			"&estadovision=" + vision +
			"&estadoobservacion=" + observacion;

	$.ajax({
		type:"POST",
		url:"../controllers/actualizaDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('../componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}