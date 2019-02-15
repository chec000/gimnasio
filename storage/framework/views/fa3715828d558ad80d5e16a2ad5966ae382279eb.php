<div id="renameMIModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3><?php echo trans('admin::menusCMS.set_custom_name'); ?>:</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <?php echo Form::label('custom_name', trans('admin::menusCMS.custom_name').':', ['class' => 'control-label']); ?>

                    <?php echo Form::text('custom_name', '', ['class' => 'form-control']); ?>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn cancel" data-dismiss="modal"><i class="fa fa-times"></i> &nbsp; <?php echo trans('admin::menusCMS.buttons.cancel'); ?></button>
                <button class="btn btn-primary change" data-dismiss="modal"><i class="fa fa-check"></i> &nbsp; <?php echo trans('admin::menusCMS.buttons.change'); ?></button>
            </div>
        </div>
    </div>
</div>