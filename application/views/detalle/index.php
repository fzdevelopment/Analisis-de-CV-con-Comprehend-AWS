<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detalle Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('detalle/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Iddetalle</th>
						<th>Perfilidperfil</th>
						<th>RequisitoidRequi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($detalle as $d){ ?>
                    <tr>
						<td><?php echo $d['iddetalle']; ?></td>
						<td><?php echo $d['perfilidperfil']; ?></td>
						<td><?php echo $d['requisitoidRequi']; ?></td>
						<td>
                            <a href="<?php echo site_url('detalle/edit/'.$d['iddetalle']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('detalle/remove/'.$d['iddetalle']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
