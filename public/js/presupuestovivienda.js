var contador=0;
var  total = 0.0;
$(document).ready(function(){
	var tbPresupuestovivienda = $("#tbPresupuestovivienda");
	$("#presup").on("click",function(e){
		e.preventDefault();
		materialvivienda = $("#materialvivienda").val() || 0,
		materialviviendatexto = $("#materialvivienda option:selected").text() || 0,
		cod = $("#materialvivienda option:selected").attr('data-codigo') || 0,
		unidad = $("#materialvivienda option:selected").attr('data-unidad') || 0,
		//alert(unidad);
		precio = $("#materialvivienda option:selected").attr('data-precio') || 0;
		cantidad = $("#materialvivienda option:selected").attr('data-cantidad') || 0;
		if(materialvivienda)
		{
			subtotal = parseFloat(cantidad)*parseFloat(precio);
			contador++;
				$(tbPresupuestovivienda).append(//$() Para hacer referencia
					"<tr>"+
					"<td>"+cod+"</td>"+
					"<td>"+materialviviendatexto+"</td>"+
					"<td>"+unidad+"</td>"+
					"<td>"+precio+"</td>"+
					"<td>"+cantidad+"</td>"+
					"<td>" +subtotal+"</td>"+
					"<td>" +
					"<input type='hidden' name='materiales[]' value='"+materialvivienda+"'/>" +
					"<input type='hidden' name='codigos[]' value='"+cod+"'/>" +
					"<input type='hidden' name='unidades[]' value='"+unidad+"'/>" +
					"<input type='hidden' name='precios[]' value='"+precio+"'/>" +
					"<input type='hidden' name='cantidades[]' value='"+cantidad+"'/>" +
					"<button type='button' class='btn btn-danger' id='eliminar'>Eliminar</button></td>" +
					"</tr>"
				);
				total = total + subtotal;
				$("#contador").val(contador);
				$("#pie #totalEnd").text(onFixed(total));
				$("#total").val(total);

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
		$("#requisicion").find("#materialvivienda, #cantidad, #precio").each(function(index, element){
			$(element).val("");
		});
	}

	function onFixed (valor, maximum) {
        maximum = (!maximum) ? 2 : maximum;
        return valor.toFixed(maximum);
    }
});
