<div class="form-group <?php echo e($field_class); ?>">
    <div class="row">
        <?php echo Form::label($name, $label, ['class' => 'control-label col-sm-2']); ?>

        <div class="col-sm-10">
            <?php echo Form::text($name, $submitted_data?:$content, ['class' => 'form-control datetimepicker '.$class] + $disabled); ?>

            <span class="help-block"><?php echo e($field_message); ?></span>
        </div>
    </div>
</div>
