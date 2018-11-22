<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Empleo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('empleo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idempleo</th>
						<th>UsuarioidUsuario</th>
						<th>AreaidArea</th>
						<th>PerfilidPerfil</th>
						<th>Titulo</th>
						<th>Fecha</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($empleo as $e){ ?>
                    <tr>
						<td><?php echo $e['idempleo']; ?></td>
						<td><?php echo $e['UsuarioidUsuario']; ?></td>
						<td><?php echo $e['AreaidArea']; ?></td>
						<td><?php echo $e['PerfilidPerfil']; ?></td>
						<td><?php echo $e['titulo']; ?></td>
						<td><?php echo $e['fecha']; ?></td>
						<td><?php echo $e['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('empleo/edit/'.$e['idempleo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('empleo/remove/'.$e['idempleo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
