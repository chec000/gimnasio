<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-header">{{ __('Registrar actividad') }}
                
                 <button class="btn btn-success">
              <a style="color:black" href="{{route('admin.Deporte.list_deportes')}}">
                 <i class="fa fa-undo"></i>
                  Regresar</a>
              </button>
                </div>

                <div class="card-body">
                    {!! Form::open(array('route' => 'admin.Deporte.save_deporte')) !!}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Actividad') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                          <div class="form-group row">
                            <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required></textarea>

                                @if ($errors->has('apellido_paterno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                             <div class="form-group row">
                            <label for="objetivos" class="col-md-4 col-form-label text-md-right">{{ __('Objetivos') }}</label>

                            <div class="col-md-6">                                
                                @foreach($objetivos as $o)                                                               
                                        <div class="form-check">
                                            <input  type="checkbox"  name="objetivos[]" value="{{$o->id }}"  id="objetivo-{{$o->id}}">
                                          <label class="form-check-label" for="objetivo-{{$o->id}}">
                                          {{$o->nombre}}
                                          </label>
                                        </div>
                                @endforeach
                                
                            </div>
                        </div>
                        
                           <div class="form-group {!! FormMessage::getErrorClass('flag') !!}">
            <label class="control-label">{{ trans('admin::brand.form_add.favicon') }}</label>
            <div class="input-group">
                <input id="flag" class="img_src form-control" name="flag" value="" type="text">
                <span class="input-group-btn">
                    <a href="{!! URL::to(config('admin.config.public').'/filemanager/dialog.php?type=1&field_id=flag') !!}" class="btn btn-default iframe-btn">{{ trans('admin::countries.add_btn_image') }}</a>
                </span>
            </div>
            <span class="help-block">{!! FormMessage::getErrorMessage('flag') !!}</span>
        </div>
    </div>
                        
                        
                             <div class="form-group row"> 
                                  <label for="objetivos" class="col-md-4 col-form-label text-md-right">{{ __('Estatus') }}</label>

                            <div class="col-md-6">                                
                                  <div class="form-check">                                     
                                <input id="activo" type="checkbox"  name="activo" value="1" >
                                      <label class="form-check-label" for="activo">
                                      Activo
                                          </label>
                                        </div>
                                
                             
                            </div>
                        </div>
                        
  
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button ype="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>                                 
                                
                            </div>
                        </div>
                    
                      {!! Form::close() !!}
                </div>
            </div>
        </div>
        
            
    </div>
@section('scripts')

    <script type='text/javascript'>
        $(document).ready(function () {        
                load_editor_js();
            $('#multiselect_language_id').select2();
            $("#multiselect_language_id");
              var lan= $('#multiselect_language_id');
            var span=lan.siblings('span');
          span.css('width', '100%');
        });
    </script>
@endsection








