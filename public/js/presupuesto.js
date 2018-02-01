var contador=0;
var  total = 0.0;
$(document).ready(function(){
	var tbPresupuesto = $("#tbPresupuesto");
	$("#agregar").on("click",function(e){
		e.preventDefault();
		material = $("#material").val() || 0,
		materialtexto = $("#material option:selected").text() || 0,
		cant = $("#cantidad").val() || 0,
		precio = $("#precio").val() || 0;
		if(material && cant && precio)
		{
			subtotal = parseFloat(cant)*parseFloat(precio);
			contador++;
				$(tbPresupuesto).append(//$() Para hacer referencia
					"<tr>"+
					"<td>"+materialtexto+"</td>"+
					"<td>"+cant+"</td>"+
					"<td>"+precio+"</td>"+
					"<td>" +subtotal+"</td>"+
					"<td>" +
					"<input type='hidden' name='materiales[]' value='"+material+"'/>" +
					"<input type='hidden' name='cantidades[]' value='"+cant+"'/>" +
					"<input type='hidden' name='precios[]' value='"+precio+"'/>" +
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
		$("#requisicion").find("#material, #cantidad, #precio").each(function(index, element){
			$(element).val("");
		});
	}

	function onFixed (valor, maximum) {
        maximum = (!maximum) ? 2 : maximum;
        return valor.toFixed(maximum);
    }
});
