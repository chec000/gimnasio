<div class="form-group {{ $field_class }}">
    <div class="row">
        {!! Form::label($name, $label, ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text($name, $submitted_data?:$content, ['class' => 'form-control '.$class] + $disabled) !!}
            <span class="help-block">{{ $field_message }}</span>
        </div>
    </div>
</div>
