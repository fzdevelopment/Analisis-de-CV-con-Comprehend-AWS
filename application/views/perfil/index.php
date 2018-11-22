<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Perfil Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('perfil/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idperfil</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($perfil as $p){ ?>
                    <tr>
						<td><?php echo $p['idperfil']; ?></td>
						<td><?php echo $p['nombre']; ?></td>
						<td><?php echo $p['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('perfil/edit/'.$p['idperfil']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('perfil/remove/'.$p['idperfil']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
