<div class="container">

    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-success" style="color:black" href="{{route('admin.venta.add')}}">
                <i class="fa fa-undo"></i>
                Registrar venta
            </a>
        </div>
        <div class="col-md-6">

            <div class="form-group" >
                <label for="sel1">Filtrar por:</label>
                <select class="form-control" id="select_dates_ventas" name="select_dates_ventas">
                    <option selected="selected">Selecciona una opción</option>
                        <option value="0">Mensual</option>
                         <option value="1">Filtrado</option>
                         <option value="2">Anual</option>
                         <option value="3">Venta efectivo</option>
                         <option value="4">Venta tarjeta</option>
                         <option value="5">Ventas membresia</option>
                         <option value="6">Ventas actividad</option>                                   
                         
                </select>
            </div>
            
           <div class="row" id="date_clientes"  style="display: none">
                             <div class="col-md-6">
                                  <div class="form-group">
                            <label for="exampleInputEmail1">Fecha inicial</label>
                              <input type="date" name="date_start_client" class="form-control"  required="required">
                          </div>
                                  
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                      <label for="exampleInputEmail1">Fecha final</label>
                                      <input type="date" name="date_end_client" class="form-control" required="required"> 
                                 </div>
                             </div>
                         </div>
            
        </div>

    </div>
    
    <br>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Ventas</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover" id="tbl_table">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Vendedor</th>
                                <th>Concepto</th>
                                <th>Fecha</th>
                                <th>Tipo pago</th>
                                <th>Total</th>
                                <th>Detalle</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($ventas)>0)
                            @foreach($ventas as $v)                     
                            @if($v->usuario!=null)
                            <tr>
                                <td>
                                    {{$v->usuario->name.' '.$v->usuario->apellido_paterno}}                                                      
                                </td>
                                <td>{{$v->seller->name}}</td>
                                <td>{{$v->concepto}}</td>                         
                                <td>{{$v->created_at}}</td>                         
                                <td>{{$v->tipo_pago}}</td>
                                <td>${{$v->total}}</td>
                                <td>                                                     
                                    <a class="fa fa-eye" href="{{ route('admin.venta.detalle', ['id' => $v->id]) }}" title="{{ trans('admin::action.edit_action') }}"></a>
                                </td>          
                            </tr>  
                            @endif

                            @endforeach
                            @endif                       
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />-->
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>

$('#tbl_table').DataTable({
    "responsive": true,
    "ordering": true,
    "language": {
        "url": "{{ trans('admin::datatables.lang') }}"
    }
});

$("#select_dates_ventas").change(function() {
    var value=$(this).val();
    if(value==="1"||value==="3"||value==="4"){
                  $("#dates_reports").show();
    }else{
                  $("#dates_reports").hide();
                  $('.loader').addClass("show");
                  getVentas(value);
    }
});
    function getVentas(tipo_reporte) {         
    $.ajax({
            url: route('admin.filter.ventas'),
            type: 'POST',
            data: {filtro: tipo_reporte},
            success: function (data) {
                if(data.code===200){
                    $.each( data.ventas, function( key, value ) {
                                console.log( key + ": " + value.usuario.name );
                });
                }
        $('.loader').removeClass("show");
    },
      error: function(data) { 
        console.log(data);
        $('.loader').removeClass("show");
    }

    });
    }
</script>   