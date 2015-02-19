jQuery(document).ready(function($){
	$('#hoy').ready(function(){
		var hoy = $('#hoy').val();
		$('#'+hoy).removeClass('panel-primary');
		$('#'+hoy).addClass('panel-green');

		if(hoy<7)
		{
			var mañana = parseInt(hoy) + 1;
			$('#'+mañana.toString()).removeClass('panel-primary');
			$('#'+mañana.toString()).addClass('panel-red');
		}
	});
	$('#aturno').change(function(){
		var turno = $('#aturno').val();
		console.log(turno);
		var cambiado = $('#turnoa').val();
		console.log(cambiado);
		$('#turnoa').attr('value', turno.toString());
		var cambiado = $('#turnoa').val();
		console.log(cambiado);
	});

	$('#cturno').change(function(){
		var turno = $('#cturno').val();
		console.log(turno);
		var cambiado = $('#turnoc').val();
		console.log(cambiado);
		$('#turnoc').attr('value', turno.toString());
		var cambiado = $('#turnoc').val();
		console.log(cambiado);
	})
});
