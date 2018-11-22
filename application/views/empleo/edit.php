<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Empleo Edit</h3>
            </div>
			<?php echo form_open('empleo/edit/'.$empleo['idempleo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="UsuarioidUsuario" class="control-label">Usuario</label>
						<div class="form-group">
							<select name="UsuarioidUsuario" class="form-control">
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuario as $usuario)
								{
									$selected = ($usuario['idusuario'] == $empleo['UsuarioidUsuario']) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['idusuario'].'" '.$selected.'>'.$usuario['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="AreaidArea" class="control-label">Area</label>
						<div class="form-group">
							<select name="AreaidArea" class="form-control">
								<option value="">select area</option>
								<?php 
								foreach($all_area as $area)
								{
									$selected = ($area['idarea'] == $empleo['AreaidArea']) ? ' selected="selected"' : "";

									echo '<option value="'.$area['idarea'].'" '.$selected.'>'.$area['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="PerfilidPerfil" class="control-label">Perfil</label>
						<div class="form-group">
							<select name="PerfilidPerfil" class="form-control">
								<option value="">select perfil</option>
								<?php 
								foreach($all_perfil as $perfil)
								{
									$selected = ($perfil['idperfil'] == $empleo['PerfilidPerfil']) ? ' selected="selected"' : "";

									echo '<option value="'.$perfil['idperfil'].'" '.$selected.'>'.$perfil['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="titulo" class="control-label">Titulo</label>
						<div class="form-group">
							<input type="text" name="titulo" value="<?php echo ($this->input->post('titulo') ? $this->input->post('titulo') : $empleo['titulo']); ?>" class="form-control" id="titulo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo ($this->input->post('fecha') ? $this->input->post('fecha') : $empleo['fecha']); ?>" class="has-datepicker form-control" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<textarea name="descripcion" class="form-control" id="descripcion"><?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $empleo['descripcion']); ?></textarea>
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