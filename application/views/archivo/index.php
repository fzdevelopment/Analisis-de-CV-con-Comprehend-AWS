<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Archivo Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('archivo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idarchivo</th>
						<th>Empleoidempleo</th>
						<th>Ruta</th>
						<th>Fechacreacion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($archivo as $a){ ?>
                    <tr>
						<td><?php echo $a['idarchivo']; ?></td>
						<td><?php echo $a['empleoidempleo']; ?></td>
						<td><?php echo $a['ruta']; ?></td>
						<td><?php echo $a['fechacreacion']; ?></td>
						<td>
                            <a href="<?php echo site_url('archivo/edit/'.$a['idarchivo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('archivo/remove/'.$a['idarchivo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
