<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <h2>Buscar cliente</h2>
            <div class="row">
                <div class="col-md-6">
                    <div id="custom-search-input">
                        <div class="input-group">
                            <input type="text" class="  search-query form-control" placeholder="Buscar" id="cliente" />
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" onclick="searchCustomer()">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-danger" type="button">
                        <a style="color:black" href="{{route('admin.Cliente.add_cliente')}}">
                            <i class="fa fa-undo"></i>
                            Nuevo cliente</a>
                    </button>
                </div>
            </div>

            <br>
            <div class="panel panel-info ">
                <div class="panel-heading">{{ __('Registrar venta') }}
                    <button class="btn btn-success">
                        <a style="color:black" href="{{route('admin.Deporte.list_deportes')}}">
                            <i class="fa fa-undo"></i>
                            Regresar</a>
                    </button>
                </div>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'admin.Deporte.save_deporte')) !!}

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>

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
                        <label for="servicio" class="col-md-4 col-form-label text-md-right">{{ __('Servicio') }}</label>

                        <div class="col-md-6">
                            <input id="servicio" type="text" class="form-control{{ $errors->has('servicio') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required>

                            @if ($errors->has('apellido_paterno'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label for="objetivos" class="col-md-4 col-form-label text-md-right">{{ __('Forma de pago') }}</label>

                        <div class="col-md-6">                                
                            <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
                                <option value="">Elegir </option>
                                <option value="Classroom Instruction and Assessment">Renovación</option>
                                <option value="Curriculum Development and Alignment">Compra de membresia</option>

                            </select>
                        </div>
                    </div>


                    <div class="form-group row"> 
                        <label for="objetivos" class="col-md-4 col-form-label text-md-right">{{ __('Forma de pago') }}</label>

                        <div class="col-md-6">                                
                            <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
                                <option value="">Choose... </option>
                                <option value="Classroom Instruction and Assessment">Classroom Instruction and Assessment</option>
                                <option value="Curriculum Development and Alignment">Curriculum Development and Alignment</option>
                                <option value="District Committee">District Committee</option>
                                <option value="Meeting">Meeting</option>
                                <option value="Other Category">Other Category</option>
                                <option value="Professional Conference">Professional Conference</option>
                                <option value="Professional Workshop / Training">Professional Workshop / Training</option>
                                <option value="Pupil Services">Pupil Services</option>
                            </select>
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


<script>

    function searchCustomer() {
        var cliente = $('#cliente').val();

        if (cliente !== "") {
            $.ajax({
                url: route('admin.Cliente.getClienteByName'),
                type: 'POST',
                data: {cliente: cliente},
                success: function (data) {
                    console.log(data);
                }

            });
        }

    }
</script>









