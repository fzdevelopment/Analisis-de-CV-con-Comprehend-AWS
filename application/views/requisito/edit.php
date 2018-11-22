<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Requisito Edit</h3>
            </div>
			<?php echo form_open('requisito/edit/'.$requisito['idrequi']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="requisito" class="control-label">Requisito</label>
						<div class="form-group">
							<input type="text" name="requisito" value="<?php echo ($this->input->post('requisito') ? $this->input->post('requisito') : $requisito['requisito']); ?>" class="form-control" id="requisito" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>