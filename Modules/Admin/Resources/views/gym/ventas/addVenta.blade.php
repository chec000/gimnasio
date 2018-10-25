<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <h2>Buscar cliente</h2>
            <div class="row">
                <div class="col-md-6">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input type="text" class="  search-query form-control" placeholder="Buscar" id="cliente"  onkeyup = "if(event.keyCode == 13) searchCustomer()" />
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" onclick="searchCustomer()">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-success" type="button">
                        <a style="color:white" href="{{route('admin.Cliente.add_cliente')}}">
                            <i class="fa fa-undo"></i>
                            Nuevo cliente</a>
                    </button>
                </div>
            </div>

            <br>
            <div class="panel panel-info ">
                <div class="panel-heading">{{ __('Registrar venta') }}
                    <button class="btn btn-success">
                        <a style="color:white" href="{{route('admin.Deporte.list_deportes')}}">
                            <i class="fa fa-undo"></i>
                            Regresar</a>
                    </button>
                </div>
                <div class="panel-body">
                
                    <div class="row">
                        <div class="col-md-6">
                                             <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
                        <input type="hidden" name="id">
                        <div class="col-md-6">
                            <input id="name"  disabled type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                </div>
                         
                        <div class="col-md-6">
                        <div id="membresias-compradas"></div>
                        
                        
                    </div>       
                            
                        </div>
            

                    </div>
   

            </div>
        </div>
    </div>


</div>
{!!$modal !!}


<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 style="color: white!important;"><i  style="color: white!important;" class="glyphicon glyphicon-thumbs-up"></i> Mensaje</h1>
            </div>
            <div class="modal-body">
                <div id="mensaje_final"></div>

                <h1 id="pago_realizado"><span id="mensaje">Su pago fue de: $</span> <span id="cantidad_pagar"></span></h1>
                <h1 id="restante"><span >Restante: $</span> <span id="cantidad_restante"></span></h1>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="reload()">Cerrar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    
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
    
    
function removarMembresia(nombre,precio,id){
    
    $("#nombre_membresia").text(nombre);
    $("#precio_membresia").text(precio);     
    $("#primary").modal("show");
}

function generarVenta(){
            if (cliente !== "") {
            $.ajax({
                url: route('admin.Cliente.getClienteByName'),
                type: 'POST',
                data: {cliente: cliente},
                success: function (data) {
             if(data.code===200){
                 $("#id").val(data.data.id);
                 $("#name").val(data.data.name+" "+data.data.apellido_paterno);
                  $("#membresias-compradas").append(data.membresias_actuales);
        }
                }

            });
        }
}



    function searchCustomer() {
        var cliente = $('#cliente').val();

        if (cliente !== "") {
            $.ajax({
                url: route('admin.Cliente.getClienteByName'),
                type: 'POST',
                data: {cliente: cliente},
                success: function (data) {
             if(data.code===200){
                 $("#id").val(data.data.id);
                 $("#name").val(data.data.name+" "+data.data.apellido_paterno);
                  $("#membresias-compradas").append(data.membresias_actuales);
        }
                }

            });
        }

    }
</script>









