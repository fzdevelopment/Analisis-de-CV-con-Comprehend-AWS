<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Area Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('area/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idarea</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($area as $a){ ?>
                    <tr>
						<td><?php echo $a['idarea']; ?></td>
						<td><?php echo $a['nombre']; ?></td>
						<td><?php echo $a['descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('area/edit/'.$a['idarea']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('area/remove/'.$a['idarea']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
