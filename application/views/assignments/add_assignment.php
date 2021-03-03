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
							<div class="title"><i class="fa-search-plus fa"></i> <?php echo $title?></div>
						</div>
					</div>
					<div class="card-body">
						<form class="form-horizontal" method="post" action="<?php echo site_url('assignments/insert_assign')?>">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Assign ID </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="asg_id" value="<?php echo $asg_kd; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Complaint Date </label>
									<div class="col-sm-10">
										<input type="date" class="form-control" name="complaint_date" required>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Service by </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="support_by" value="<?php echo $this->session->userdata('FULLNAME')?>" readonly>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Last Service by </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="support_by_last" value="<?php echo $this->session->userdata('FULLNAME')?>" readonly>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Asset ID </label>
									<div class="col-sm-10">
										<select name="ast_id" class="form-text" data-placeholder=" = Pilih Asset = " style="width:100%;">
											<option value=""></option>
											<?php
											if(isset($asset_data)){
											foreach($asset_data as $row){
											?>
											<option value="<?php echo $row->ast_id; ?>"><?php echo $row->ast_id; ?></option>
											<?php
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-10">
										<select name="stat_id" class="form-text" data-placeholder=" = Select Status = " style="width:100%;">
											<option value=""></option>
											<?php
											if(isset($stat_data)){
											foreach($stat_data as $row){
											?>
											<option value="<?php echo $row->stat_id; ?>"><?php echo $row->stat_name; ?></option>
											<?php
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Service Date </label>
									<div class="col-sm-10">
										<input type="date" class="form-control" name="service_start" value="<?php echo $today; ?>" required>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">to </label>
									<div class="col-sm-10">
										<input type="date" class="form-control" name="service_end" value="<?php echo $today; ?>" required>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-1 control-label">Complaint </label>
									<div class="col-sm-11">
										<textarea class="form-control" rows="3" name="complaints" required></textarea>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="col-sm-offset-1 col-sm-11">
										<a href="<?php echo site_url('assignments')?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Cancel</a>
										<button type="submit" class="btn btn-info"><i class="icon fa fa-check-square"></i> Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>