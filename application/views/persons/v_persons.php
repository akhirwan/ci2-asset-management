<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">
				<a href="<?php echo site_url('persons/add_person')?>" class="btn btn-success" ><i class="icon fa fa-user-plus"></i> Add User </a>
				<a href="<?php echo site_url('departments')?>" class="btn btn-warning" ><i class="icon fa fa-flag"></i> Departments </a>
				<a href="<?php echo site_url('levels')?>" class="btn btn-primary" ><i class="icon fa fa-sitemap"></i> Levels/Jabatan </a>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#inactive"><i class="icon fa fa-user-times"></i> View Inactive Users </button>
			</span>
			<div class="description"></div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="icon fa fa-users"></i> <?php echo $title?></div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="datatable table table-striped  table-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th width="15px">No</th>
										<th>Kode</th>
										<th>NIK</th>
										<th>User Name</th>
										<th>Nama Lengkap</th>
										<th>Email</th>
										<th>Departemen</th>
										<th>Jabatan</th>
										<th>Aktif</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th width="15px">No</th>
										<th>Kode</th>
										<th>NIK</th>
										<th>User Name</th>
										<th>Nama Lengkap</th>
										<th>Email</th>
										<th>Departemen</th>
										<th>Jabatan</th>
										<th>Aktif</th>
										<th>Actions</th>
									</tr>
								</tfoot>
								<tbody>
								<?php
								$no=1;
								if(isset($person_active)){
								foreach($person_active as $row){
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->person_id; ?></td>
										<td><?php echo $row->nik; ?></td>
										<td><?php echo $row->user_name; ?></td>
										<td><?php echo $row->full_name; ?></td>
										<td><?php echo $row->email; ?></td>
										<td><?php echo $row->dept_name; ?></td>
										<td><?php echo $row->lvl_name; ?></td>
										<td><?php echo $row->inactive; ?></td>
										<td>
											<a href="<?php echo site_url('persons/edit_person/'.$row->person_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> | Edit </a>
											<a href="<?php echo site_url('persons/del_person/'.$row->person_id);?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin?')" >
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

<div class="modal modal-danger fade bs-example-modal-lg" id="inactive" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="icon fa fa-user-times"></i> Inactive Users</h4>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="datatable table table-striped  table-responsive" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="15px">No</th>
								<th>Kode</th>
								<th>NIK</th>
								<th>User Name</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Departemen</th>
								<th>Jabatan</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th width="15px">No</th>
								<th>Kode</th>
								<th>NIK</th>
								<th>User Name</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Departemen</th>
								<th>Jabatan</th>
								<th>Actions</th>
							</tr>
						</tfoot>
						<tbody>
						<?php
						$no=1;
						if(isset($person_inactive)){
						foreach($person_inactive as $row){
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row->person_id; ?></td>
								<td><?php echo $row->nik; ?></td>
								<td><?php echo $row->user_name; ?></td>
								<td><?php echo $row->full_name; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->dept_name; ?></td>
								<td><?php echo $row->lvl_name; ?></td>
								<td>
									<a href="<?php echo site_url('persons/edit_person/'.$row->person_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> | Edit </a>
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