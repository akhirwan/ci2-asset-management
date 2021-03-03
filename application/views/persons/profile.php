<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">
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
							<table class="table table-striped  table-responsive" cellspacing="0" width="100%">
								<tbody>
								<?php
								$no=1;
								if(isset($person_data)){
								foreach($person_data as $row){
								?>
									<tr>
										<td width="30%" align="right"><strong>User ID</strong></td>
										<td><?php echo $row->person_id; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong>N.I.K</strong></td>
										<td><?php echo $row->nik; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong>User Name</strong></td>
										<td><?php echo $row->user_name; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong>Nama Lengkap</strong></td>
										<td><?php echo $row->full_name; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong>Email</strong></td>
										<td><?php echo $row->email; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong>Departemen</strong></td>
										<td><?php echo $row->dept_name; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong>Level</strong></td>
										<td><?php echo $row->lvl_name; ?></td>
									</tr>
									<tr>
										<td width="30%" align="right"><strong> </strong></td>
										<td><a href="<?php echo site_url('persons/edit_profile')?>" class="btn btn-success" ><i class="icon fa fa-edit"></i> Edit Profile</a></td>
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
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="fa-desktop fa"></i> <?php echo $this->session->userdata('FULLNAME')?>'s Equipments</div>
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
										<th>Actions</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
									$no=1;
									if(isset($asset_user_data)){
									foreach($asset_user_data as $row){
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
											<a href="<?php echo site_url('assets/detail_asset/'.$row->ast_id);?>" class="btn btn-sm btn-primary" ><i class="icon fa fa-eye"></i> | Detail </a>
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
