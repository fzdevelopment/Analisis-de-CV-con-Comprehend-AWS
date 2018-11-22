<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Requisito Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('requisito/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idrequi</th>
						<th>Requisito</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($requisito as $r){ ?>
                    <tr>
						<td><?php echo $r['idrequi']; ?></td>
						<td><?php echo $r['requisito']; ?></td>
						<td>
                            <a href="<?php echo site_url('requisito/edit/'.$r['idrequi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('requisito/remove/'.$r['idrequi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
