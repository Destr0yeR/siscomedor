jQuery(document).ready(function($){

	$("#countries").change(function(){
		var country = $(this).val();
		var base_path = $("#base_path").val();
		$("#departments").prop('disabled',true);
		if(country != 0)
		{
			$.ajax({
				url: base_path+"/country/"+country+"/departments",
				success: function(resp){
					$("#departments").html(resp);
					$("#departments").prop('disabled', false);
					$("#provinces").html('<option value="0">Seleccione una provincia</option>');
					$("#provinces").prop('disabled',true);
					$("#districts").html('<option value="0">Seleccione un distrito</option>');
					$("#districts").prop('disabled',true);
				}
			});
		}
		else
		{
			$("#departments").html('<option value="0">Seleccione un departamento</option>');
			$("#departments").prop('disabled',true);
		}
		$("#provinces").html('<option value="0">Seleccione una provincia</option>');
		$("#provinces").prop('disabled',true);
		$("#districts").html('<option value="0">Seleccione un distrito</option>');
		$("#districts").prop('disabled',true);


	});

	$("#departments").change(function(){
		var department = $(this).val();
		var base_path = $("#base_path").val();
		$('#provinces').prop('disabled',true);
		if(department != 0)
		{
			$.ajax({
				url: base_path+"/department/"+department+"/provinces",
				success: function(resp){
					$("#provinces").html(resp);
					$("#provinces").prop('disabled',false);
				}
			});
		}
		else
		{
			$("#provinces").html('<option value="0">Seleccione una provincia</option>');
			$("#provinces").prop('disabled',true);
		}

		$("#districts").html('<option value="0">Seleccione un distrito</option>');
		$("#districts").prop('disabled',true);

	});

	$("#provinces").change(function(){
		var province = $(this).val();
		var base_path = $("#base_path").val();
		$("districts").prop('disabled',true);
		if(province != 0)
		{
			$.ajax({
				url: base_path+"/province/"+province+"/districts",
				success: function(resp){
					$("#districts").html(resp);
					$("#districts").prop('disabled',false);
				}
			})
		}
		else
		{
			$("#districts").html('<option value="0">Seleccione un distrito</option>');
			$("#districts").prop('disabled',true);
		}
	});

	$("#levels").change(function(){
		var level = $(this).val();
		var base_path = $('#base_path').val();
		$("#grades").prop('disabled',true);
		if(level!=0)
		{
			$.ajax({
				url: base_path+"/level/"+level+"/grades",
				success: function(resp){
					$("#grades").html(resp);
					$("#grades").prop('disabled',false);
				}
			});
		}
	});

});