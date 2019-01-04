<div class="container">
    <div class="row">
        <div class="col-md-12">
            
                   <a class="btn btn-success" style="color:black" href="{{route('admin.venta.add')}}">
                            <i class="fa fa-undo"></i>
                            Registrar venta
                        </a>
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
                            <td>{{$v->tipo_pago}}</td>                         
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
            "ordering": false,
                 "language": { 
                    "url": "{{ trans('admin::datatables.lang') }}"
               }   
        });

</script>