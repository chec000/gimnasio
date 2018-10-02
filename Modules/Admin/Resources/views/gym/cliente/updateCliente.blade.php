<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}
                   <button class="btn btn-success">
              <a style="color:black" href="{{route('admin.Cliente.list_clientes')}}">
                 <i class="fa fa-undo"></i>
                  Regresar</a>
              </button>
                
                </div>
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#cliente" role="tab" data-toggle="tab">Cliente</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Membresia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Contactos</a>
  </li>
  
</ul>
                
               <div class="tab-content">
                   <div role="tabpanel" class="tab-pane fade in active" id="cliente">
                                  <div class="card-body">
                       {!! Form::open(array('route' => 'admin.Cliente.update_cliente')) !!}  
                      
                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $cliente->usuario->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                                    <div class="form-group row">
                            <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno') }}</label>

                            <div class="col-md-6">
                                <input id="apellido_paterno" type="text" class="form-control{{ $errors->has('apellido_paterno') ? ' is-invalid' : '' }}" name="apellido_paterno" value="{{ $cliente->usuario->apellido_paterno }}" required>

                                @if ($errors->has('apellido_paterno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido_paterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                                    <div class="form-group row">
                            <label for="apellido_materno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno') }}</label>

                            <div class="col-md-6">
                                <input id="apellido_materno" type="text" class="form-control{{ $errors->has('apellido_materno') ? ' is-invalid' : '' }}" name="apellido_materno" value="{{ $cliente->usuario->apellido_materno }}" required>

                                @if ($errors->has('apellido_materno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido_materno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                                    <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ $cliente->usuario->telefono }}" required>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                                    <div class="form-group row">
                            <label for="telefono_celular" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono celular') }}</label>

                            <div class="col-md-6">
                                <input id="telefono_celular" type="tel" class="form-control{{ $errors->has('telefono_celular') ? ' is-invalid' : '' }}" name="telefono_celular" value="{{ $cliente->usuario->telefono_celular }}" required>

                                @if ($errors->has('telefono_celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono_celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                                    <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ $cliente->usuario->fecha_nacimiento }}" disabled>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                                    <div class="form-group row">
                            <label for="estado_civil" class="col-md-4 col-form-label text-md-right">{{ __('Estado civil') }}</label>

                            <div class="col-md-6">
                                <input id="estado_civil" type="text" class="form-control{{ $errors->has('estado_civil') ? ' is-invalid' : '' }}" name="estado_civil" value="{{ $cliente->usuario->estado_civil }}" required>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estado_civil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                                    <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" value="{{ $pais->nombre }}" disabled>


                                @if ($errors->has('pais'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                                    <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                               <input id="estado" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="estado" value="{{ $estado->nombre }}" disabled>

                                @if ($errors->has('estado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{$cliente->usuario->direccion }}" required>

                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $cliente->usuario->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>

                            <div class="col-md-2">
                                <input id="activo" value="1" type="checkbox" class="form-control{{ $errors->has('activo') ? ' is-invalid' : '' }}" name="activo"  {{ ($cliente->activo)==1?'checked':'' }}>

                                @if ($errors->has('activo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('activo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                     {!! Form::close() !!}

                </div>
                       
                       
                       
                   </div>
                   <div role="tabpanel" class="tab-pane fade" id="buzz">
                       <div class="table-responsive">
 <table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Duración</th>
      <th scope="col">Precio</th>
    <th scope="col">Estatus</th>
     <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    
        @if(count($cliente->membresias)>0)
                @foreach( $cliente->membresias as $m )
                
                <tr>
                        <td>{{$m->id}}</td>
                       <td>{{$m->nombre}}</td>
                      <td>{{$m->tipo_id}}</td>
                      <td>{{$m->duracion}}</td>
                       <td>{{$m->precio}}</td>
                      
                             <td><span id="status{{$m->id}}"  class="label  {{$m->activo ? 'label-success' : 'label-default'}} ">{!! $m->activo== 0 ?  trans('admin::language.lang_list_st_inactive')  : trans('admin::language.lang_list_st_active')  !!}</span></td>
                        @if ($can_edit || $can_delete)
                <td data-lid="{!! $m->id !!}">
                    <span onclick="activeDesactiveCliente({{$m->id}})" id='activeBrand{{$m->id}}' class="{{$m->activo ? '' : 'hide'}}">
                        <i class="glyphicon glyphicon-play itemTooltip  " title="{{ trans('admin::action.disable_action') }}" ></i>
                    </span>
                    <span onclick="activeDesactiveCliente({{$m->id}})" id='inactiveBrand{{$m->id}}' class="{{$m->activo ? 'hide' : ''}}">                                
                        <i class="glyphicon glyphicon-stop  itemTooltip "  title="{{ trans('admin::action.enable_action') }}"></i>                            
                    </span>
                    </td>
                @endif
               </tr>
        @endforeach
        @else
              <span>No existen membresias agregadas</span>
        @endif
         

  

  </tbody>
</table>
</div>
                       
                       
                   </div>
  <div role="tabpanel" class="tab-pane fade" id="references">ccc</div>
</div> 
                
     
            </div>
        </div>
    </div>
</div>
