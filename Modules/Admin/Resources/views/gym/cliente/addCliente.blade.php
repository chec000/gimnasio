<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <button onclick="   openNav()" class="btn"><span>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </span> Ver carrito </button>
        </div>
    </div>
    <div class="row">        
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab">
                                    <i class="fa fa-shopping-cart"></i>                            
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-credit-card"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-ok"></i>                               
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>         
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div role="tabpanel" class="tab-pane fade in sow active" id="cliente">               
                            <div class="panel panel-info">                 
                                <div class="panel-heading"> <h3 class="panel-title">{{ __('Register') }}</h3> </div>
                                <div class="panel-body">
                                    {!! Form::open(array('route' => 'admin.Cliente.save_cliente','id'=>'save_client')) !!}

                                    <input type="hidden" name="tipo_inscripcion" value="1">
                                    <input type="hidden" name="lat" value="0">
                                    <input type="hidden" name="lon" value="0">

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>                          
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{( $cliente!=null)?$cliente['name']:""}}" required autofocus>
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>                   
                                            <input id="apellido_paterno" type="text" class="form-control{{ $errors->has('apellido_paterno') ? ' is-invalid' : '' }}" name="apellido_paterno" value="{{( $cliente!=null)?$cliente['apellido_paterno']:""}}" required>                               
                                            @if ($errors->has('apellido_paterno'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('apellido_paterno') }}</strong>
                                            </span>
                                            @endif                            
                                        </div>
                                    </div>                                      
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="apellido_materno" class="col-form-label text-md-right">{{ __('Apellido materno') }}</label>          
                                            <input id="apellido_materno" type="text" class="form-control{{ $errors->has('apellido_materno') ? ' is-invalid' : '' }}" name="apellido_materno" value="{{( $cliente!=null)?$cliente['apellido_materno']:""}}" required>
                                            @if ($errors->has('apellido_materno'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('apellido_materno') }}</strong>
                                            </span>
                                            @endif                          
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="telefono" class=" col-form-label text-md-right">{{ __('Teléfono') }}</label>                       
                                            <input id="telefono" type="tel" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{( $cliente!=null)?$cliente['telefono']:""}}" required >
                                            @if ($errors->has('telefono'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telefono') }}</strong>
                                            </span>
                                            @endif                      
                                        </div>
                                    </div>                       
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="telefono_celular" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono celular') }}</label>
                                            <input id="telefono_celular" type="tel" class="form-control{{ $errors->has('telefono_celular') ? ' is-invalid' : '' }}" name="telefono_celular" value="{{( $cliente!=null)?$cliente['telefono_celular']:""}}" required>
                                            @if ($errors->has('telefono_celular'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telefono_celular') }}</strong>
                                            </span>
                                            @endif                        
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha nacimiento') }}</label>
                                            <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{( $cliente!=null)?$cliente['fecha_nacimiento']:""}}" required>
                                            @if ($errors->has('fecha_nacimiento'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>               
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="estado_civil" class="col-md-4 col-form-label text-md-right">{{ __('Estado civil') }}</label>
                                            <input id="estado_civil" type="text" class="form-control{{ $errors->has('estado_civil') ? ' is-invalid' : '' }}" name="estado_civil" value="{{( $cliente!=null)?$cliente['estado_civil']:""}}" required>
                                            @if ($errors->has('fecha_nacimiento'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('estado_civil') }}</strong>
                                            </span>
                                            @endif                           
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>
                                            <select name="pais"  class="form-control" id="pais" onchange="getEstadoPais(this);">
                                                @foreach ($paises as $p)
                                                <option  value="{{$p->id}}">{{$p->nombre}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('pais'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('pais') }}</strong>
                                            </span>
                                            @endif
                                        </div>                            
                                    </div>                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                                            <select name="estado"   class="form-control" id="estado">
                                                <option></option>
                                            </select>
                                            @if ($errors->has('estado'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('estado') }}</strong>
                                            </span>
                                            @endif                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>
                                            <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{( $cliente!=null)?$cliente['direccion']:""}}" required>
                                            @if ($errors->has('direccion'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('direccion') }}</strong>
                                            </span>
                                            @endif                           
                                        </div>
                                    </div>                              
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{( $cliente!=null)?$cliente['email']:""}}" required >

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ trans('admin::countries.add_flag') }}</label>
                                                <div class="input-group">
                                                    <input id="flag" class="img_src form-control" name="flag" value=''  type="text" value="{{( $cliente!=null)?$cliente['flag']:""}}">
                                                    <span class="input-group-btn">
                                                        <a href="{!! URL::to(config('admin.config.public').'/filemanager/dialog.php?type=1&field_id=flag') !!}" class="btn btn-default iframe-btn">{{ trans('admin::countries.add_btn_image') }}</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required value="{{( $cliente!=null)?$cliente['password']:""}}">

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>                            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required value="{{( $cliente!=null)?$cliente['password']:""}}">
                                        </div>                            
                                    </div>   

                                    <!--<button type="submit" class="btn btn-primary next-step">Save and continue</button>-->
                                    <button type="button" class="btn btn-primary next-step">Save and continue</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>

                        <!--                        <ul class="list-inline pull-right">
                                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                                </ul>-->
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                                                       {!!$list_membresias!!}           

                         
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                       
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </section>
    </div>
</div>

<div class="loader" style=" opacity: 0.5;background-color: #f1eaea;">
    <div class="loader__content">
        <div class="loader__inner">
            <img src="{{asset('themes/omnilife2018/images/cargando-loading-041.gif')}}">            
        </div>
    </div>
</div>
<style>
    
    .loader {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 99999;
  width: 100vw;
  height: 100vh;
  visibility: hidden;
  -webkit-transition: visibility 0s 0.5s;
  -moz-transition: visibility 0s 0.5s;
  -o-transition: visibility 0s 0.5s;
  -ms-transition: visibility 0s 0.5s;
  transition: visibility 0s 0.5s;
}

.loader.show {
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  -ms-transition: none;
  transition: none;
  opacity: 0.5;
  visibility: visible;
}
.loader.show .loader__content {
  -webkit-transition: -webkit-transform 0.17s ease-in-out, border-radius 0.17s ease-in-out 0.17s;
  -moz-transition: -moz-transform 0.17s ease-in-out, border-radius 0.17s ease-in-out 0.17s;
  -o-transition: -o-transform 0.17s ease-in-out, border-radius 0.17s ease-in-out 0.17s;
  -ms-transition: -ms-transform 0.17s ease-in-out, border-radius 0.17s ease-in-out 0.17s;
  transition: transform 0.17s ease-in-out, border-radius 0.17s ease-in-out 0.17s;
  border-radius: 0;
  -webkit-transform: scale3d(1, 1, 1);
  -moz-transform: scale3d(1, 1, 1);
  -o-transform: scale3d(1, 1, 1);
  -ms-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
}
.loader__content {
  position: absolute;
  top: 0;
  left: 0;
  display: -webkit-box;
  display: -moz-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: box;
  display: flex;
  -webkit-box-pack: center;
  -moz-box-pack: center;
  -o-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -moz-box-align: center;
  -o-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background-color: #fff;
  background-color: rgba(255,255,255,.9);
  border-radius: 50%;
  -webkit-transform: scale3d(0, 0, 0);
  -moz-transform: scale3d(0, 0, 0);
  -o-transform: scale3d(0, 0, 0);
  -ms-transform: scale3d(0, 0, 0);
  transform: scale3d(0, 0, 0);
  -webkit-transition: -webkit-transform 0.17s ease-in-out 0.17s ease-in-out;
  -moz-transition: -moz-transform 0.17s ease-in-out 0.17 ease-in-out;
  -o-transition: -o-transform 0.17s ease-in-out 0.17s 0.17s ease-in-out;
  -ms-transition: -ms-transform 0.17s ease-in-out 0.17s 0.17s ease-in-out;
  transition: transform 0.17s ease-in-out 0.17s, opacity .9 ease-in-out;
}
.loader__circular {
  width: 100px;
  height: 100px;
  -webkit-animation: rotate 2s linear infinite;
  -moz-animation: rotate 2s linear infinite;
  -o-animation: rotate 2s linear infinite;
  -ms-animation: rotate 2s linear infinite;
  animation: rotate 2s linear infinite;
  -webkit-transform-origin: center center;
  -moz-transform-origin: center center;
  -o-transform-origin: center center;
  -ms-transform-origin: center center;
  transform-origin: center center;
}
.loader__base {
  fill: none;
  stroke: #673167;
  stroke-width: 7;
}
.loader__path {
  fill: none;
  stroke: #fba343;
  stroke-width: 2;
  stroke-dasharray: 1, 200;
  stroke-dashoffset: 0;
  stroke-linecap: round;
  stroke-miterlimit: 10;
  -webkit-animation: dash 1.5s ease-in-out infinite;
  -moz-animation: dash 1.5s ease-in-out infinite;
  -o-animation: dash 1.5s ease-in-out infinite;
  -ms-animation: dash 1.5s ease-in-out infinite;
  animation: dash 1.5s ease-in-out infinite;
}
    
</style>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--<script src="{{ PageBuilder::js('add') }}"></script>-->

{!! Form::open(array('route' => 'admin.Estados.estados','id'=>'form_estado')) !!}
<input type="hidden" id="id_pais" name="id_pais">

{!! Form::close() !!}

{!!$venta_aside!!}

<script type="text/javascript">
    //    $('#tbl_clientes').DataTable();
    function agregarMembresia (id, nombre){
        console.log('asasas',nombre);
        saveMembresia(id,1).done(function (data) {
                openNav();
        if(data.code==100){
                    var m=$("#list_membresias");
                        m.append(data.data);
        }                                                 
     });        
    }
    
    

    
    
    function  realizarPago(tipo){
     $('.loader').addClass("show");
         
    $.ajax({
           url : route('admin.Cliente.finalizar_compra'),
            data :{tipo:tipo},
            type :'POST',
            dataType : 'json',
            success: function (data) {
                    $('.loader').removeClass("show");
                    $('#primary').modal('hide');
                    scrollTop();
//                    location.reload();
            },            
                error: function(data) { 
                   $('.loader').removeClass("show");
                     $('#primary').modal('hide');
//                     location.reload();
                        scrollTop();            
    } 
    });    
    }
    
    
    

    function addCantidad(id, cantidad, precio){
    var subtotal = $("#subtotal_membresia-" + id);
    var old_value = $("#cantidad_m-" + id);
    if (cantidad === null){
    var ca = old_value.val();
    old_value.val(parseInt(ca) + 1);
    }

    subtotal.text(old_value.val() * precio);
    }

    function eliminarMembresia(id){
    $("#membresia-" + id).remove();
    }


    $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

    var $target = $(e.target);
    if ($target.parent().hasClass('disabled')) {
    return false;
    }
    });
    $(".next-step").click(function (e) {

    saveCliente().done(function (data) {
    if (data.status == true){
    var $active = $('.wizard .nav-tabs li.active');
    $active.next().removeClass('disabled');
    nextTab($active);
    } else{
        
        if(data.code==300){
             var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
             nextTab($active);
        }else{
                $("#dialog").dialog();
    var mensajes = $("#cmsDefaultNotification");
    $.each(data.data, function (index, value) {
    mensajes.css('display', 'block');
    mensajes.addClass('panel panel-danger');
    $('html, body').animate({scrollTop:0}, 'slow');
    mensajes.append("  <span class='label label-danger'>" + value + "</span>");
    });    
    }
    }
    });
    });
    $(".prev-step").click(function (e) {

    var $active = $('.wizard .nav-tabs li.active');
    prevTab($active);
    });
    });
    function saveCliente(){
    form = $("#save_client");
    var request = $.ajax({
    url : form.attr('action'),
            data :form.serialize(),
            type : form.attr('method'),
            dataType : 'json',
            });
    return request;
    }

    function saveMembresia(id,cantidad){ 
    var request = $.ajax({
    url : route('admin.Cliente.add_membresia'),
            data :{id_membresia:id,cantidad:cantidad},
            type : 'POST',
            dataType : 'json',
            });
    return request;
    }


    function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
    }
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
    
    var exist_data=false;
    
    function detalleVenta(){
        closeNav();
       if(exist_data==false){
                      $.ajax({
            url: route('admin.Cliente.detalle_venta_checkout'),
            type: 'GET', 
            success: function (data) {
                $("#step3").html(data);            
                exist_data=true;                  
            }
    });
       } 
    }
    
    function scrollTop(){
        $('html, body').animate( { scrollTop : 0 }, 800 );
    }
    
</script>






