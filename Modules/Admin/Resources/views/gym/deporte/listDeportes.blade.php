<div class="row textbox">
    <div class="col-sm-6">
        <h1>{{ trans('gum::deporte.deporte_list') }}</h1>
    </div>
   
    @if($can_add)   
    <div class="col-sm-6 text-right">     
        <a href="{{ route('admin.Deporte.addDeporte') }}" class="btn btn-warning addButton"><i class="fa fa-plus"></i> &nbsp;
            {{ trans('admin::deporte.add_deporte') }}</a>
    </div>
    @endif
</div>

<div class="table-responsive">
    @if (isset($success))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $action == 'edit' ? trans('admin::language.lang_edit_success', array('lang' => $lang)) : trans('admin::language.lang_add_success', array('lang' => $lang)) }}
    </div>
    @endif
    <table class="table table-striped" id="tbl_table">
        <thead>
            <tr>
                  <th>{{ trans('gym::deporte.deporte') }}</th>
                <th>{{ trans('gym::deporte.descripcion') }}</th>
                <!--<th>{{ trans('admin::form_add.lang_list_name') }}</th>-->
                <th>{{ trans('admin::deporte.objetivos') }}</th>
                
                <th>{{ trans('admin::brand.form_add.status') }}</th>
                @if ($can_edit || $can_delete)
                <th>{{ trans('admin::brand.form_add.actions') }}</th>

                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($deportes as $m)
            <tr id="menu_{!! $m->id !!}">
                <td>{!! $m->nombre !!}</td>
                <td>{!! $m->descripcion !!}</td>       
                @if(count($m->objetivos)>0)
             <td>
                  @foreach ($m->objetivos as $o)
            <span>{{$o->nombre}}</span>                        
          @endforeach                
             </td>
            @else            
            <td></td>
        @endif
                <td><span id="status{{$m->id}}"  class="label  {{$m->activo ? 'label-success' : 'label-default'}} ">{!! $m->activo== 0 ?  trans('admin::language.lang_list_st_inactive')  : trans('admin::language.lang_list_st_active')  !!}</span></td>
                @if ($can_edit || $can_delete)
                <td data-lid="{!! $m->id !!}">
                    <span onclick="disable_item({{$m->id}})" id='activeBrand{{$m->id}}' class="{{$m->activo ? '' : 'hide'}}">
                        <i class="glyphicon glyphicon-play itemTooltip  " title="{{ trans('admin::action.disable_action') }}" ></i>
                    </span>
                    <span onclick="disable_item({{$m->id}})" id='inactiveBrand{{$m->id}}' class="{{$m->activo ? 'hide' : ''}}">                                
                        <i class="glyphicon glyphicon-stop  itemTooltip "  title="{{ trans('admin::action.enable_action') }}"></i>                            
                    </span>                                
                    <a class="glyphicon glyphicon-pencil itemTooltip" href="{{ route('admin.Deporte.get_deporte', ['id' => $m->id]) }}" title="{{ trans('admin::action.edit_action') }}"></a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script type="text/javascript">
    function disable_item(id) {              
    $.ajax({
    url: route('admin.Deporte.active_inactive'),
            type: 'POST',
            data: {id: id},
            success: function (data) {
        console.log(data);
        let label = $("#status" + id);
            let iconActive = $("#activeBrand" + id);
            let iconInactive = $("#inactiveBrand" + id);
            if (data === "0") {
            iconActive.addClass('hide');
            iconInactive.removeClass('hide');
            label.removeClass('label-success').addClass('label-default');
            label.text("Inactivo");
            }
            else {
            iconActive.removeClass('hide');
            iconInactive.addClass('hide');
            label.removeClass('label-default').addClass('label-success');
            label.text("Activo");
            }
            }

    });
    }

    $('#tbl_table').DataTable({
    "responsive": true,
            "ordering": false,
              "language": { 
                    "url": "{{ trans('admin::datatables.lang') }}"
               }  
    });

</script>
