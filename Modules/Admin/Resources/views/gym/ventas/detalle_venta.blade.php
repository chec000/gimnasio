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
                            <button type="button" class="btn btn-success btn-block next-step">
                                Pagar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary" href="#primary" data-toggle="modal"><h4><i class="glyphicon glyphicon-eye-open"></i> Primary</h4></a>
<!-- Modal -->
<div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 style="color:white!important"><i class="glyphicon glyphicon-thumbs-up"></i> Confirmar pago</h1>
            </div>
            <div class="modal-body">     
                 
    <div class="row">
        <div class="form-group">
            <div class="searchable-container">
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default" style="border-radius:3px;">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Efectivo</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default" style="border-radius:3px;">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Tarjeta</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            <span class="glyphicon glyphicon-tags glyphicon-lg"></span>
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default" style="border-radius:3px;">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Otro</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

        


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style>
    .modal-header-primary {
        color:#fff;
        padding:9px 15px;
        border-bottom:1px solid #eee;
        background-color: #428bca;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        
        
    }
.searchable-container{margin:20px 0 0 0}
.searchable-container label.btn-default.active{background-color:#007ba7;color:#FFF}
.searchable-container label.btn-default{width:90%;border:1px solid #efefef;margin:5px; box-shadow:5px 8px 8px 0 #ccc;}
.searchable-container label .bizcontent{width:100%;}
.searchable-container .btn-group{width:90%}
.searchable-container .btn span.glyphicon{
    opacity: 0;
}
.searchable-container .btn.active span.glyphicon {
    opacity: 1;
}


</style>

<script>

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
</script>





