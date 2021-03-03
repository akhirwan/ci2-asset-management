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
						<a href="<?php echo site_url('assignments/add_assign')?>" class="btn btn-success" ><i class="icon fa fa-wrench"></i> Add Assignment </a>
						<a href="<?php echo site_url('status')?>" class="btn btn-warning" ><i class="icon fa fa-file-text-o"></i> Status </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="icon fa fa-tasks"></i> <?php echo $title?></div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="datatable table table-striped  table-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th width="15px">No </th>
										<th>Assignment ID </th>
										<th>Asset ID </th>
										<th>Complaint Date </th>
										<th>Complaint </th>
										<th>Service Start </th>
										<th>Service End </th>
										<th>Status </th>
										<th>Service by </th>
										<th>Last Service by </th>
										<th>Actions </th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th width="15px">No </th>
										<th>Assignment ID </th>
										<th>Asset ID </th>
										<th>Complaint Date </th>
										<th>Complaint </th>
										<th>Service Start </th>
										<th>Service End </th>
										<th>Status </th>
										<th>Service by </th>
										<th>Last Service by </th>
										<th>Actions </th>
									</tr>
								</tfoot>
								<tbody>
								<?php
								$no=1;
								if(isset($asg_data)){
								foreach($asg_data as $row){
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row->asg_id; ?></td>
										<td><?php echo $row->ast_id; ?></td>
										<td><?php echo $row->complaint_date; ?></td>
										<td><?php echo $row->complaints; ?></td>
										<td><?php echo $row->service_start; ?></td>
										<td><?php echo $row->service_end; ?></td>
										<td><?php echo $row->stat_name; ?></td>
										<td><?php echo $row->support_by; ?></td>
										<td><?php echo $row->support_by_last; ?></td>
										<td>
											<a href="<?php echo site_url('assignments/edit_assign/'.$row->asg_id);?>" class="btn btn-sm btn-warning" ><i class="icon fa fa-edit"></i> | Update </a>
											<a href="<?php echo site_url('assignments/del_assign/'.$row->asg_id);?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin?')" >
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
