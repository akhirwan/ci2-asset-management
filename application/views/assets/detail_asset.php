<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title"><?php echo $title?></span>
			<div class="description"></div>
		</div>
		<?php
			if (isset($asset_data_id)){
				foreach($asset_data_id as $row){
					?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="fa-desktop fa"></i> Informasi Asset</div>
						</div>
					</div>
					<div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered" width="100%" cellspacing="0">
								<tbody>
									<tr>
										<td width="15%" align="right"><strong>Kode Asset</strong></td>
										<td width="35%"><?php echo $row->ast_id; ?></td>
										<td width="15%" align="right"><strong>Nama Asset</strong></td>
										<td width="35%"><?php echo $row->ast_name; ?></td>
									</tr>
									<tr>
										<td width="15%" align="right"><strong>Kategori</strong></td>
										<td width="35%"><?php echo $row->cat_name; ?></td>
										<td width="15%" align="right"><strong>Area</strong></td>
										<td width="35%"><?php echo $row->area_name; ?></td>
									</tr>
									<tr>
										<td width="15%" align="right"><strong>User</strong></td>
										<td width="35%"><?php echo $row->full_name; ?></td>
										<td width="15%" align="right"><strong>Department</strong></td>
										<td width="35%"><?php echo $row->dept_name; ?></td>
									</tr>
									<tr>
										<td width="15%" align="right"><strong>Deskripsi</strong></td>
										<td width="35%" colspan="3"><?php echo $row->ast_desc; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($this->session->userdata('DEPT') == 'DEPT0001'){ ?>
		<div class="row hidden-print">
			<div class="col-xs-12">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalDefault"><i class="icon fa fa-search-plus"></i> | Multiple Add Spec</button>
				<a href="<?php echo site_url('assets');?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Back </a>
			</div>
		</div>
		<?php } else { ?>
		<div class="row hidden-print">
			<div class="col-xs-12">
				<a href="<?php echo site_url('assets');?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Back </a>
			</div>
		</div>
		<?php }
			}
			}
		?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="fa-search fa"></i> Spesifikasi Asset</div>
						</div>
					</div>
					<div>
						<?php if ($this->session->userdata('DEPT') == 'DEPT0001'){ ?>
						<div class="table-responsive">
							<table class="table table-striped table-bordered" width="100%" cellspacing="0">
								<tbody>
									<form class="form-horizontal" method="post" action="<?php echo site_url('assets/insert_spec')?>">
									<tr class="hidden-print">
										<td>
											<input type="hidden" class="form-control" name="astid" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr">
										</td>
										<td>
											<input type="text" class="form-control" name="value">
										</td>
										<td class="hidden-print" width="20%">
											<button type="submit" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
										</td>
									</tr>
									</form>
									<?php
									if (!empty($spec_data_id)){
									foreach($spec_data_id as $row){
									?>
									<tr>
										<td width="30%" align="right"><strong><?php echo $row->attr; ?></strong></td>
										<td><?php echo $row->value; ?></td>
										<td class="hidden-print" width="20%">
											<a href="<?php echo site_url('assets/del_spec/'.$row->id);?>" class="btn btn-danger"><i class="icon fa fa-remove"></i></a>
										</td>
									</tr>
									<?php }
									}
									else { echo'<a class="list-group-item"><strong>No data available</strong></a>';}
									?>
								</tbody>
							</table>
						</div>
						<?php } else { ?>
						<div class="table-responsive">
							<table class="table table-striped table-bordered" width="100%" cellspacing="0">
								<tbody>
									<?php
									if (!empty($spec_data_id)){
									foreach($spec_data_id as $row){
									?>
									<tr>
										<td width="30%" align="right"><strong><?php echo $row->attr; ?></strong></td>
										<td><?php echo $row->value; ?></td>
									</tr>
									<?php }
									}
									else { echo'<a class="list-group-item"><strong>No data available</strong></a>';}
									?>
								</tbody>
							</table>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title"><i class="icon fa fa-tasks"></i> Assignment History</div>
						</div>
					</div>
					<div>
						<div class="table-responsive">
							<table class="table table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr class="info">
										<th class="text-center" style="vertical-align:middle;" width="15px" rowspan="2">No </th>
										<th class="text-center" style="vertical-align:middle;" rowspan="2">Assignment ID </th>
										<th class="text-center" style="vertical-align:middle;" rowspan="2">Complaint Date </th>
										<th class="text-center" style="vertical-align:middle;" colspan="2">Service Date</th>
										<th class="text-center" style="vertical-align:middle;" rowspan="2">Status </th>
										<th class="text-center" style="vertical-align:middle;" rowspan="2">Service by </th>
										<th class="text-center" style="vertical-align:middle;" rowspan="2">Last Service by </th>
									</tr>
									<tr class="info">
										<th class="text-center" >Start </th>
										<th class="text-center" >Finish </th>
									</tr>
								</thead>
								<?php
								$no=1;
								if(!empty($asg_data)){
								foreach($asg_data as $row){
								?>
								<tbody>
									<tr>
										<th scope="row" class="text-center" style="vertical-align:middle;" rowspan="2"><?php echo $no++; ?></th>
										<td><?php echo $row->asg_id; ?></td>
										<td><?php echo $row->complaint_date; ?></td>
										<td><?php echo $row->service_start; ?></td>
										<td><?php echo $row->service_end; ?></td>
										<td><?php echo $row->stat_name; ?></td>
										<td><?php echo $row->support_by; ?></td>
										<td><?php echo $row->support_by_last; ?></td>
									</tr>
									<tr class="active">
										<td><strong>Complaint </strong></td>
										<td colspan="6"><?php echo $row->complaints; ?></td>
									</tr>
								<?php }
								}
									else { echo'<a class="list-group-item"><strong>No data available</strong></a>';}
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

<!-- Modal -->
<div class="modal fade modal-success" id="modalDefault" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<?php $this->load->view("assets/add_spec"); ?>
</div>

<script>
function goBack() {
    window.history.back();
}
</script>