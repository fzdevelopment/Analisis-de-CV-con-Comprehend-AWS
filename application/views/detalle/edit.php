<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detalle Edit</h3>
            </div>
			<?php echo form_open('detalle/edit/'.$detalle['iddetalle']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="perfilidperfil" class="control-label">Perfil</label>
						<div class="form-group">
							<select name="perfilidperfil" class="form-control">
								<option value="">select perfil</option>
								<?php 
								foreach($all_perfil as $perfil)
								{
									$selected = ($perfil['idperfil'] == $detalle['perfilidperfil']) ? ' selected="selected"' : "";

									echo '<option value="'.$perfil['idperfil'].'" '.$selected.'>'.$perfil['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="requisitoidRequi" class="control-label">Requisito</label>
						<div class="form-group">
							<select name="requisitoidRequi" class="form-control">
								<option value="">select requisito</option>
								<?php 
								foreach($all_requisito as $requisito)
								{
									$selected = ($requisito['idrequi'] == $detalle['requisitoidRequi']) ? ' selected="selected"' : "";

									echo '<option value="'.$requisito['idrequi'].'" '.$selected.'>'.$requisito['requisito'].'</option>';
								} 
								?>
							</select>
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