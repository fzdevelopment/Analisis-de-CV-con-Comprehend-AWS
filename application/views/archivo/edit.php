<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Archivo Edit</h3>
            </div>
			<?php echo form_open('archivo/edit/'.$archivo['idarchivo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="empleoidempleo" class="control-label">Empleo</label>
						<div class="form-group">
							<select name="empleoidempleo" class="form-control">
								<option value="">select empleo</option>
								<?php 
								foreach($all_empleo as $empleo)
								{
									$selected = ($empleo['idempleo'] == $archivo['empleoidempleo']) ? ' selected="selected"' : "";

									echo '<option value="'.$empleo['idempleo'].'" '.$selected.'>'.$empleo['titulo'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ruta" class="control-label">Ruta</label>
						<div class="form-group">
							<input type="text" name="ruta" value="<?php echo ($this->input->post('ruta') ? $this->input->post('ruta') : $archivo['ruta']); ?>" class="form-control" id="ruta" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechacreacion" class="control-label">Fechacreacion</label>
						<div class="form-group">
							<input type="text" name="fechacreacion" value="<?php echo ($this->input->post('fechacreacion') ? $this->input->post('fechacreacion') : $archivo['fechacreacion']); ?>" class="has-datepicker form-control" id="fechacreacion" />
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