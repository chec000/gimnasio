<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Reportes</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">Reporte de clientes
                    <div class="pull-right">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse01"
                                aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse" id="collapse01">
                    <button class="btn btn-default btn-block" onclick="reporte('cliente')">Mensual</button>
                      <button class="btn btn-default btn-block">Filtrado </button>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading clearfix">Reporte de ventas
                    <div class="pull-right">
                        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapse02"
                                aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse" id="collapse02">
                    <button class="btn btn-default btn-block">Mensual</button>
                    <button class="btn btn-default btn-block">Filtrado</button>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading clearfix">categoria en proceso
                    <div class="pull-right">
                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapse06"
                                aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse" id="collapse06">
                    <button class="btn btn-default btn-block">Mensual</button>
                    <button class="btn btn-default btn-block">Filtrado</button>  
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading clearfix">Reporte de entrenadores
                    <div class="pull-right">
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse03"
                                aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse" id="collapse03">
                   <button class="btn btn-default btn-block">Mensual</button>
                    <button class="btn btn-default btn-block">Filtrado</button>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading clearfix">Reporte de gastos
                    <div class="pull-right">
                        <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapse04"
                                aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse" id="collapse04">
                    <button class="btn btn-default btn-block">Mensual</button>
                    <button class="btn btn-default btn-block">Filtrado</button>  </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading clearfix">Reporte de inscripciones
                    <div class="pull-right">
                        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
                                aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse" id="collapse05">
                    <button class="btn btn-default btn-block">Mensual</button>
                    <button class="btn btn-default btn-block">Filtrado</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--<script src="{{ PageBuilder::js('add') }}"></script>-->

<script type="text/javascript">
    function reporte(tipo_reporte) {         
    $.ajax({
            url: route('admin.reporte-general'),
            type: 'POST',
            data: {tipo_reporte: tipo_reporte},
            success: function (data) {
        console.log(data);
        
            },
      error: function(data) { 
        console.log(data);          
    }

    });
    }

</script>