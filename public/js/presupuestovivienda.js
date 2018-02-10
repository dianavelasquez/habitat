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
		precio = $("#materialvivienda option:selected").attr('data-precio') || 0;
		cantidad = $("#cantidad").val() || 0;
		if(materialvivienda && cantidad)
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
		totaltotal  = $("#totalEnd");
        var totalFila=parseFloat($(this).parents('tr').find('td:eq(5)').text());
        total = parseFloat(totaltotal.text()) - parseFloat(totalFila);
        contador--;
        $("#contador").val(contador);
		$("#total").val(total);
		$("#pie #totalEnd").text(onFixed(total));
		tr.remove();
	});

	function limpiar(){
		$("#presupuestovivienda").find("#materialvivienda, #cantidad").each(function(index, element){
			$(element).val("");
		});
	}

	function onFixed (valor, maximum) {
        maximum = (!maximum) ? 2 : maximum;
        return valor.toFixed(maximum);
    }
});
