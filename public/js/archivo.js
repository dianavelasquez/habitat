var total=0.0;
var correlativo =0;
    $(document).ready(function(){
    var tbMaterial = $("#tbMaterial");
    
     $("#agregar").on("click", function(e) {
    //     //var tr     = $(e.target).parents("tr"),
                   
         e.preventDefault();
             nombre = $("#nombre").val() || 0,
             tipo = $("#tipo").val()    || 0,
             canti  = $("#cantidad").val() || 0,
             valor = $("#tipo option:selected").html(),
             precio = $("#precio").val() || 0;

         if(nombre && tipo && canti && precio){
             var subtotal = parseFloat(precio) * parseFloat(canti);
             correlativo++;
             $(tbMaterial).append(
                 "<tr data-nombre='"+nombre+"' data-tipo='"+tipo+"' data-cantidad='"+canti+"' data-precio='"+precio+"' >"+
                     "<td>" + nombre + "</td>" + 
                     "<td>" + valor + "</td>" + 
                     "<td>" + canti+ "</td>" + 
                     "<td>" + precio + "</td>" +
                     "<td>" + onFixed( subtotal, 2 ) + "</td>" + 
                     "<td><button type='button' id='delete-btn' class='btn btn-danger'>Eliminar</button></td>" +                        
                 "</tr>"
             );
             total +=( parseFloat(canti) * parseFloat(precio) );
             $("#pie #totalEnd").text(onFixed(total));
             //total2=total;
             //clearForm();
         }else{
             alert('Debe llenar todos los campos');
         }       
     });

    function onDisplayTotal () {

    };

    $("#btnsub").on("click", function (e) {
        var arrayElement = new Array(),
            token        = null;
            cliente      = null;
            mejora       = null;
            trabajados   = null;
            totalpre     = null;
        $(tbMaterial).find("tr").each(function (index, element) {
            if(element){
                arrayElement.push({ 
                    descripcion : $(element).attr("data-nombre"),
                    material : $(element).attr("data-tipo"),
                    cantidad :$(element).attr("data-cantidad"),
                    precio   : $(element).attr("data-precio")
                });
                //total = totalp+(parseFloat(cantidad))*(parseFloat(precio));
            }
            token = $("#_token").val();
            cliente = $("#cliente").val();
            mejora        = $("#mejora").val();
            trabajados  = $("#dias")
            totalpre    = $("#pie #totalEnd").text();
        });

       /*var elemento = {
            cliente : cliente,
            mejora  : mejora,
            trabajados : trabajados,
            total   : totalpre,
            elementos : arrayElement
        };*/


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN' : token },
            url: '/presupuestos',
            dataType: 'json',
            data: { id_cliente: cliente, mejora: mejora, trabajados: trabajados, total: totalpre }
      });
        /*$.post("", elemento)
        .done(function (response) {
            console.log(response);
            if(response){
                  alert("guardo");
        
                //win2ow.location.reload();
            }

        });*/
    });

    $(document).on("click", "#delete-btn", function (e) {
        var tr     = $(e.target).parents("tr"),
            totaltotal  = $("#totalEnd");
          //alert(total.text());
        var totalFila=parseFloat($(this).parents('tr').find('td:eq(4)').text());
        //var total = $(this).find("td:eq(5)").text();
            //alert(totalFila);
            total = parseFloat(totaltotal.text()) - parseFloat(totalFila);
        var totalValue = parseFloat(totaltotal.text()) - parseFloat(totalFila);
        //subtotal=totalValue;
        //alert(totalValue);
        //total.text(onTixed(totalValue));
        //total2 = (on2ixed(totalValue));
        tr.remove();
        $("#pie #totalEnd").text(onFixed(totalValue));
        correlativo--;
    });
    
    function clearForm () {
        $("#presupuestoform").find("#nombre,#cantidad,#precio,#tipo").each(function (index, element) {
            $(element).val("");
        });
        
    }

    function onDisplaySelect (productoID) {
        $("#producto option").each(function (index, element) {
            if($(element).attr("value") == productoID ){
                $(element).css("display", "block");
            }
     });
    }

    function onFixed (valor, maximum) {
        maximum = (!maximum) ? 2 : maximum;
        return valor.toFixed(maximum);
    }
});

