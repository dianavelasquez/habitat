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
            id           = null;
            proveedor    = null;
            totalp       = null;
        $(tbProducto).find("tr").each(function (index, element) {
            if(element){
                arrayElement.push({ 
                    producto : $(element).attr("data-producto"),
                    cantidad : $(element).attr("data-cantidad"),
                    precio   : $(element).attr("data-precio")
                });
                //total = totalp+(parseFloat(cantidad))*(parseFloat(precio));
            }
            proveedor = $("#proveedor").val();
            id        = $("#cod").val();
            totalp    = $("#pie #totalEnd").text();
        });

        var elemento = {
            id        : id,
            proveedor  : proveedor,
            productos : arrayElement,
            total1   : totalp 
        };


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $.post("../includes/compras/guardar_compra.php", elemento)
        .done(function (response) {
            console.log(response);
            if(response){
                  BootstrapDialog.show({
                    title: 'Aviso',
                    size: BootstrapDialog.SIZE_LARGE,
                    message: 'Datos guardados!',
                    buttons: [{
                        
                        label: 'Cerrar ',
                        cssClass: 'btn btn-primary',
                        action: function(dialogItself){
                            window.location.reload();
                            dialogItself.close();
                        }
                    }]
                });
        
                //win2ow.location.reload();
            }

        });
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

