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
                                <button type="button" class="btn btn-primary btn-sm btn-block">
                                    <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    
                    @foreach($membresias as $m)
                    <div class="row">
                        <div class="col-xs-2"><img class="img-responsive" src="{{$m->imagen}}">
                        </div>
                        <div class="col-xs-4">
                            <h4 class="product-name"><strong>{{$m->name}}</strong></h4><h4><small>{{$m->descripcion}}</small></h4>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-6 text-right">
                                <h6><strong>{{$m->precio}} <span class="text-muted">x</span></strong></h6>
                            </div>
                                     <div class="col-xs-6">                                                                                                                                                         
                                <h4 class="product-name">                                                                        
                                    <strong>Subtotal: $<span id="subtotal-membresia-{{$m->id}}">{{$m->subtotal}}</span><span class="text-muted">x</span></strong></h4>                                    
                                <div class="col-xs-12">
                                    <button type="button" onclick="addMembresia({{$m->id}},0)" class="btn btn-default" style="padding: 5px 15px;border-radius: 5px;
    font-size: 10px;">-</button>
                                     <span  id="cantidad-membresia-{{$m->id}}">{{$m->cantidad}}</span>
                                     <button type="button"   onclick="addMembresia({{$m->id}},1)" class="btn btn-default" style="padding: 5px 15px;border-radius: 5px;
                                font-size: 10px;">+</button>
                                   
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
                            <h4 class="text-right">Total $<strong id="total_membresia">00.00</strong></h4>
                        </div>
                        <div class="col-xs-6">
                                <button type="button" class="btn btn-success btn-block next-step">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
       function addMembresia(id_membresia,tipo) {              
    $.ajax({
    url: route('admin.Cliente.add_less_membresia'),
            type: 'POST',
            data: {id_membresia: id_membresia,tipo:tipo},
            success: function (data) {
                 $("#total_membresia").text(data.total_pagar);
                 $("#cantidad-membresia-"+id_membresia).text(data.cantidad);
                 $("#subtotal-membresia-"+id_membresia).text(data.subtotal);
            }

    });
    }
</script>



