<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title"></span>
			<div class="description"></div>
		</div>
		<?php
		if (isset($dept_data_id)){
			foreach($dept_data_id as $row){
				?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Edit Department : <?php echo $row->dept_id; ?></div>
						</div>
					</div>
					<div class="card-body">
						<form class="form-inline" method="post" action="<?php echo site_url('departments/update_dept')?>">
							<input type="hidden" class="form-control" name="dept_id" value="<?php echo $row->dept_id; ?>" readonly>
							<div class="form-group">
								<input type="text" class="form-control" name="dept_name" value="<?php echo $row->dept_name; ?>">
							</div>
							<button type="submit" class="btn btn-info"><i class="icon fa fa-edit"></i> | Update</button>
							<a href="<?php echo site_url('departments')?>" class="btn btn-default" ><i class="icon fa fa-toggle-left"></i> Cancel </a>
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
							<div class="title"><i class="icon fa fa-flag"></i> <?php echo $title?></div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="datatable table table-striped  table-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No</th>
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
								if(isset($dept_data)){
								foreach($dept_data as $row){
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->dept_id; ?></td>
										<td><?php echo $row->dept_name; ?></td>
										<td>
											<a href="<?php echo site_url('departments/edit_dept/'.$row->dept_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> Edit </a>
											<a href="<?php echo site_url('departments/del_dept/'.$row->dept_id)?>" class="btn btn-sm btn-danger" ><i class="icon fa fa-remove"></i> Delete </a>
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