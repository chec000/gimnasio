<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-6">
                                <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-default prev-step">
                                    <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">                    
                    @foreach($membresias as $m)
                    <div class="row list-group-item">
                        <div class="col-xs-2"><img class="img-responsive" src="{{$m->imagen}}">
                        </div>
                        <div class="col-xs-4">
                            <h4 class="product-name"><strong>{{$m->nombre}}</strong></h4><h4><small>{{$m->descripcion}}</small></h4>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4 text-right">
                                <h6>Precio: <strong>${{$m->precio}} </strong></h6>
                            </div>
                            <div class="col-xs-8">       
                                <div class="col-xs-4">
                                    <h4 class="product-name">                                                                        
                                        <strong>Subtotal: $<span id="subtotal-membresia-{{$m->id}}">{{$m->subtotal}}</span></strong></h4>  

                                </div>     

                                <div class="col-xs-8">

                                    @if($m->id!=0)
                                    <button type="button" onclick="addMembresia({{$m->id}}, 0)" class="btn btn-default" style="padding: 5px 15px;border-radius: 5px;
                                            font-size: 10px;">-</button>
                                    <span  id="cantidad-membresia-{{$m->id}}">{{$m->cantidad}}</span>
                                    <button type="button"   onclick="addMembresia({{$m->id}}, 1)" class="btn btn-default" style="padding: 5px 15px;border-radius: 5px;
                                            font-size: 10px;">+</button>
                                    @endif

                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                    <hr>

                    <hr>
                </div>
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <h4 class="text-right">Total $<strong id="total_membresia">{{$total}}</strong></h4>
                        </div>
                        <div class="col-xs-6">
                            <button type="button"  onclick="showModalPago()"class="btn btn-success btn-block next-step">
                                Pagar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<a class="btn btn-primary" ><h4><i class="glyphicon glyphicon-eye-open"></i> Primary</h4></a>-->
<!-- Modal -->
{!!$modal!!}


<script>
//kAKAJka
    function addMembresia(id_membresia, tipo) {
    $.ajax({
    url: route('admin.Cliente.add_less_membresia'),
            type: 'POST',
            data: {id_membresia: id_membresia, tipo:tipo},
            success: function (data) {
            $("#total_membresia").text(data.total_pagar);
            $("#cantidad-membresia-" + id_membresia).text(data.cantidad);
            $("#subtotal-membresia-" + id_membresia).text(data.subtotal);
            }

    });
    }
            function showModalPago() {
                        var total_cliente = $("#total_membresia").text();
                        $("#total_pagar_cliente").text(total_cliente);
                        $("#primary").modal('show');
                    }
                    
              function  realizarPago(tipo) {
                 
                        $('.loader').addClass("show");
                        if (tipo_pago === "efectivo") {
                            var pago_cliente = $("#pago_cliente").val();
                        } else {
                            pago_cliente = 0;
                        }

                        if (tipo_pago === "efectivo") {
                            if (pago_cliente > 0) {
                                finalizarCheckout(tipo_pago, pago_cliente);
                            }
                        } else {
                            finalizarCheckout(tipo_pago, pago_cliente);
                        }
                    }
                        var tipo_pago = "";
                    function tipoPago(tipo, element) {
                        tipo_pago = tipo;
                        var tarjetas = $('.searchable-container').find('label');
                        if (element.id === "pago_efectivo") {
                            $("#pago_con_efectivo").css('display', 'block');
                        } else {
                            $("#pago_con_efectivo").css('display', 'none');
                        }
                        $.each(tarjetas, function (index, value) {
                            if (value.id !== element.id) {
                                value.classList.remove('active');
                            }
                        });
                    }
                    
                    
                          function finalizarCheckout(tipo_pago, pago_cliente) {
                        $.ajax({
                            url: route('admin.Cliente.finalizar_compra'),
                            data: {tipo_pago: tipo_pago, pago_cliente: pago_cliente},
                            type: 'POST',
                            dataType: 'json',
                            success: function (data) {
                                   var mensajes = $("#cmsDefaultNotification");
                                $('.loader').removeClass("show");
                                $('#primary').modal('hide');
                                if(data.tipo_venta==2){
                                     mensajes.css('display', 'block');
                                    mensajes.addClass('panel panel-success');
                                      $("#success").modal('show');
                                    $("#cantidad_pagar").text(data.total);
                                    $("#cantidad_restante").text(data.diferencia);                                  
                                    $("#mensaje_final").append("<span class='label label-success'>" + data.data + "</span>");
                                    mensajes.append("  <h1>" + data.data + "</h1>");
                                }else{
                                                        var $active = $('.wizard .nav-tabs li.active');
                                $active.next().removeClass('disabled');
                                nextTab($active);
                             
                                if (data.code == 200) {
                                    mensajes.css('display', 'block');
                                    mensajes.addClass('panel panel-success');
                                      $("#success").modal('show');
                                    $("#cantidad_pagar").text(data.total);
                                    $("#cantidad_restante").text(data.diferencia);                                  
                                    $("#mensaje_final").append("<span class='label label-success'>" + data.data + "</span>");
                                    mensajes.append("  <h1>" + data.data + "</h1>");

                                } else {
                                    mensajes.append("  <span class='label label-success'>" + data.data + "</span>");
                                } 
                                }
                            
       
                            },
                            error: function (data) {
                                $('.loader').removeClass("show");
                                $('#primary').modal('hide');

                                scrollTop();
                            }
                        });
                    }
                    
                    function reload(){
                    location.reload();
                    }
                    
</script>





