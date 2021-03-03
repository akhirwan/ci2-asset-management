<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title"></span>
			<div class="description"></div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Link to </div>
						</div>
					</div>
					<div class="card-body">
						<a href="<?php echo site_url('assets/add_asset')?>" class="btn btn-info" ><i class="icon fa fa-plus"></i> | Add Asset </a>
						<a href="<?php echo site_url('categories')?>" class="btn btn-success" ><i class="icon fa fa-list"></i> | Categories </a>
						<a href="<?php echo site_url('areas')?>" class="btn btn-warning" ><i class="icon fa fa-map-marker"></i> | Areas </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="fa-desktop fa"></i> <?php echo $title?></div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="datatable table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th width="15px">No</th>
										<th>Asset ID</th>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Kategori</th>
										<th>User</th>
										<th>Area</th>
										<th>Assignment</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th width="15px">No</th>
										<th>Asset ID</th>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Kategori</th>
										<th>User</th>
										<th>Area</th>
										<th>Assignment</th>
										<th>Actions</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
									$no=1;
									if(isset($asset_data)){
									foreach($asset_data as $row){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->ast_id; ?></td>
										<td><?php echo $row->ast_name; ?></td>
										<td><?php echo $row->ast_desc; ?></td>
										<td><?php echo $row->cat_name; ?></td>
										<td><?php echo $row->full_name; ?></td>
										<td><?php echo $row->area_name; ?></td>
										<td>
											<a href="<?php echo site_url('assignments/add_assign_by_asset/'.$row->ast_id);?>" class="btn btn-sm btn-info" ><i class="icon fa fa-tasks"></i> | Add Assignment </a>
										</td>
										<td>
											<a href="<?php echo site_url('assets/detail_asset/'.$row->ast_id);?>" class="btn btn-sm btn-primary" ><i class="icon fa fa-eye"></i> | Detail </a>
											<a href="<?php echo site_url('assets/edit_asset/'.$row->ast_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> | Edit </a>
											<a href="<?php echo site_url('assets/del_asset/'.$row->ast_id);?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin?')" >
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
