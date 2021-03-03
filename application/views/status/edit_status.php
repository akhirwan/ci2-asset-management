<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title"></span>
			<div class="description"></div>
		</div>
		<?php
			if (isset($stat_data_id)){
				foreach($stat_data_id as $row){
				?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Edit Status : <?php echo $row->stat_id; ?></div>
						</div>
					</div>
					<div class="card-body">
						<form class="form-inline" method="post" action="<?php echo site_url('status/update_stat')?>">
							<input type="hidden" class="form-control" name="stat_id" value="<?php echo $row->stat_id; ?>" readonly>
							<div class="form-group">
								<input type="text" class="form-control" name="stat_name" value="<?php echo $row->stat_name; ?>" required>
							</div>
							<button type="submit" class="btn btn-info"><i class="icon fa fa-edit"></i> Update</button>
							<a href="<?php echo site_url('status')?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Cancel</a>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php }
		}
		?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="icon fa fa-file-text-o"></i> <?php echo $title?></div>
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
								if(isset($stat_data)){
								foreach($stat_data as $row){
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->stat_id; ?></td>
										<td><?php echo $row->stat_name; ?></td>
										<td>
											<a href="<?php echo site_url('status/edit_stat/'.$row->stat_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> | Edit </a>
											<a href="<?php echo site_url('status/del_stat/'.$row->stat_id);?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin?')" >
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
