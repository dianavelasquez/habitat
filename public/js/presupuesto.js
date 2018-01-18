var contador=0;
$(document).ready(function(){
	var tbPresupuesto = $("#tbPresupuesto");
	$("#agregar").on("click",function(e){
		e.preventDefault();
		material = $("#material").val() || 0;
		cant = $("#cantidad").val() || 0;
		descripcion = $("#descripcion").val() || 0;
		if(material && cant && descripcion)
		{
			contador++;
				$(tbPresupuesto).append(//$() Para hacer referencia
					"<tr>"+
					"<td>"+material+"</td>"+
					"<td>"+cant+"</td>"+
					"<td>"+descripcion+"</td>"+
					"<td>" +
					"<input type='hidden' name='materiales[]' value='"+material+"'/>" +
					"<input type='hidden' name='cantidades[]' value='"+cant+"'/>" +
					"<input type='hidden' name='descripciones[]' value='"+descripcion+"'/>" +
					"<button type='button' class='btn btn-danger' id='eliminar'>Eliminar</button></td>" +
					"</tr>"
				);
				$("#contador").val(contador);
				limpiar();
		}else {
			{
				swal(
					 '¡Aviso!',
					 'Debe llenar todos los campos',
					 'warning'
)
			}
		}


	});
	$(document).on("click","#eliminar",function(e){
		var tr= $(e.target).parents("tr");
		tr.remove();
		contador--;
		$("#contador").val(contador);

	});

	function limpiar(){
		$("#requisicion").find("#material, #cantidad, #descripcion").each(function(index, element){
			$(element).val("");
		});
	}
});
