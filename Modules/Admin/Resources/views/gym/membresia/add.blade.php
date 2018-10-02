<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">{{ __('Register') }}
                    <button class="btn btn-success">
                        <a style="color:black" href="{{route('admin.Membresia.list_membresia')}}">
                            <i class="fa fa-undo"></i>
                            Regresar</a>
                    </button>
                </div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'admin.Membresia.saveMembresia')) !!}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="tipo" class=" ">{{ __('Tipo') }}</label>


                            <select name="tipo" class="form-control">
                                @foreach ($tipos as $t)                                             
                                <option value="{{$t->id}}">{{$t->nombre}}</option>
                                @endforeach    
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                            @if ($errors->has('nombre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>

                    <div class="row">


                        <div class="form-group col-md-6">
                            <label for="precio" class=" col-form-label text-md-right">{{ __('Precio') }}</label>

                            <input id="precio" type="number" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" name="precio" value="{{ old('precio') }}" required>

                            @if ($errors->has('precio'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('precio') }}</strong>
                            </span>
                            @endif

                        </div>                        

                        <div class="form-group col-md-6">
                            <label for="requisitos" class="col-form-label text-md-right">{{ __('Descripcion') }}</label>
                            <textarea id="fecha_nacimiento" type="" class="form-control{{ $errors->has('requisitos') ? ' is-invalid' : '' }}" name="requisitos" value="{{ old('requisitos') }}" required ></textarea>
                            @if ($errors->has('requisitos'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('requisitos') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>                                                                                

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('admin::countries.add_flag') }}</label>
                                <div class="input-group">
                                    <input id="flag" class="img_src form-control" name="flag" value=''  type="text">
                                    <span class="input-group-btn">
                                        <a href="{!! URL::to(config('admin.config.public').'/filemanager/dialog.php?type=1&field_id=flag') !!}" class="btn btn-default iframe-btn">{{ trans('admin::countries.add_btn_image') }}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="duracion" class="col-form-label text-md-right">{{ __('Duración') }}</label>
                            <input id="duracion" type="date" class="form-control{{ $errors->has('duracion') ? ' is-invalid' : '' }}" name="duracion" value="{{ old('duracion') }}" required>

                            @if ($errors->has('duracion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('duracion') }}</strong>
                            </span>
                            @endif

                        </div>   
                    </div>

                    <div class="row">
                        <div class="panel panel-info col-md-6">
                            <div class="panel-heading">Beneficios</div>
                            <div class="panel-body">
                                <ul style="list-style:none">
                                    @foreach ($beneficios as $b)                              
                                    <li>
                                        <label class="form-check-label">
                                            <input name="beneficio[]" type="checkbox" class="form-check-input" value="{{$b->id}}">{{$b->nombre}}
                                        </label>

                                    </li>

                                    @endforeach      
                                </ul>
                            </div> 
                        </div>     

                        <div class="panel panel-info col-md-6">
                            <div class="panel-heading">Beneficios</div>
                            <div class="panel-body">
                                <ul style="list-style:none">
                                    @foreach ($deportes as $b)                              
                                    <div class="form-check" style="display: inline-block">
                                        <li>
                                            <label class="form-check-label">
                                                <input name="deporte[]" type="checkbox" class="form-check-input" value="{{$b->id}}">{{$b->nombre}}
                                            </label>

                                        </li>


                                        @endforeach     
                                </ul>

                            </div> 
                        </div> 

                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Agregar') }}
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>



