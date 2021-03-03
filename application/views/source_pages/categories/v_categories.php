<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title"></span>
			<div class="description"></div>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Add new Category : <?php echo $cat_kd; ?></div>
						</div>
					</div>
					<div class="card-body">
						<form class="form-inline" method="post" action="<?php echo site_url('categories/add_cat')?>">
							<input type="hidden" class="form-control" name="cat_id" value="<?php echo $cat_kd; ?>" readonly>
							<div class="form-group">
								<input type="text" class="form-control" name="cat_name" required>
							</div>
							<button type="submit" class="btn btn-info"><i class="icon fa fa-plus"></i> Insert</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Link to </div>
						</div>
					</div>
					<div class="card-body">
						<a href="<?php echo site_url('areas')?>" class="btn btn-warning" ><i class="icon fa fa-flag"></i> Areas </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="icon fa fa-list"></i> <?php echo $title?></div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="datatable table table-striped  table-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th width="15px">No</th>
										<th>Kode</th>
										<th>Nama</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Kode</th>
										<th>Nama</th>
										<th>Actions</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
								$no=1;
								if(isset($cat_data)){
								foreach($cat_data as $row){
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->cat_id; ?></td>
										<td><?php echo $row->cat_name; ?></td>
										<td>
											<a href="<?php echo site_url('categories/edit_cat/'.$row->cat_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> | Edit </a>
											<a href="<?php echo site_url('categories/del_cat/'.$row->cat_id);?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin?')" >
												<i class="icon fa fa-remove"></i> | Delete 
											</a>
										</td>
									</tr>
								<?php }
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
