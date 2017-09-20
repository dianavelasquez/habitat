
@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Cliente</div>
                <div class="panel-body">
                    <form id="presupuestoform" name="presupuestoform">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Cliente</label>
                                <select name="cliente" id="cliente" class="form-control">
                                    <option value="">Seleccione un Cliente...</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id}}">{{ $cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Fecha</label>
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ date('d-m-Y') }}" readonly>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Mejora a Realizar</label>
                                <input id="mejora" type="text" class="form-control" name="mejora" />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Dias Trabajados</label>
                                <input id="dias" type="text" class="form-control" name="dias" />
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                            <label for="" class="col-md-4 control-label"><b>Materiales</b></label>
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Tipo del Material</label>
                                <select id="tipo" name="tipo" class="form-control">
                                    <option value="">Seleccione un material</option>
                                    @foreach($materiales as $material)
                                        <option value="{{ $material->id }}">{{ $material->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Nombre del material</label>
                                <input id="nombre" type="text" class="form-control" name="nombre"/>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Precio Unitario</label>
                                <input id="precio" type="text" class="form-control" name="precio" />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Cantidad</label>
                                <input id="cantidad" type="text" class="form-control" name="cantidad" />
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="button" id="agregar" class="btn btn-success">Agregar</button>
                            </div>
                             
                        </div>

                        <table class="table table-striped table-bordered" id="tbMaterial">
                            <thead>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Sub total</th>
                                <th>Acción</th>
                            </thead>
                            <tbody></tbody>
                            <tfoot id="pie">
                                <tr>
                                <td class="text-left" colspan="2">Total $</td>
                                <td colspan="5" style="text-align:right;" id="totalEnd">0.00</td>
                            </tr>
                            </tfoot>
                        </table>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" id="btnsub" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')


<!--
<script type="text/javascript">
var total=total2=0.0;
var correlativo =0;
function agregar()
    {
        alert('entro'); 
    }
    $(document).on("ready", function() {
    var tbMaterial = $("#tbMaterial");
    
    // $("#agregar").on("click", function(e) {
    //     //var tr     = $(e.target).parents("tr"),
                   
    //     e.preventDefault();
    //         nombre = $("#nombre").val() || 0,
    //         tipo = $("#tipo").val()    || 0,
    //         canti  = $("#cantidad").val() || 0,
    //         precio = $("#precio").val() || 0;

    //     if(nombre && tipo && canti && precio){
    //         var Subtotal = parseFloat(precio) * parseFloat(canti);
    //         correlativo++;
    //         $(tbMaterial).append(
    //             "<tr data-nombre='"+nombre+"' data-tipo='"+tipo+"' data-cantidad='"+canti+"' data-precio='"+precio+"' >"+
    //                 "<td>" + correlativo + "</td>" +
    //                 "<td>" + nombre + "</td>" + 
    //                 "<td>" + tipo + "</td>" + 
    //                 "<td>" + canti+ "</td>" + 
    //                 "<td>" + precio + "<td>" +
    //                 "<td>" + onTixed( Subtotal, 2 ) + "</td>" + 
    //                 "<td><button type='button' id='delete-btn' class='btn'>Eliminar</button></td>" +                        
    //             "</tr>"
    //         );
    //         total +=( parseFloat(canti) * parseFloat(precio) );
    //         $("#pie #totalEnd").text(onTixed(total));
    //         //total2=total;
    //         clearForm();
    //     }else{
    //         alert('Debe llenar todos los campos');
    //     }       
    // });

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
            total  = $("#totalEnd");
        
        var subTotal = $(tr).find("td:eq(3)").text();
        var totalValue = parseFloat($(total).text()) - ( parseFloat(subTotal) );
        total.text(onTixed(totalValue));
        //total2 = (on2ixed(totalValue));
        tr.remove();
    });
    
    function clearForm () {
        $("#presupuestoform").find("#nombre,#cantidad","#precio","#tipo").each(function (index, element) {
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

    function onTixed (valor, maximum) {
        maximum = (!maximum) ? 2 : maximum;
        return valor.toFixed(maximum);
    }
});

</script>
-->
@endsection