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
						<form class="form-horizontal" method="post" action="<?php echo site_url('persons/insert_person')?>">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Kode User </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="person_id" value="<?php echo $person_kd; ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">N.I.K </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nik" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Username </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="user_name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Kata Sandi </label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="pwd" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="full_name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email </label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" value="@transstudiobandung.co.id" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Departments </label>
								<div class="col-sm-10">
									<select name="dept_id" class="form-text" data-placeholder=" = Select Department = " style="width:100%;">
										<option value=""></option>
										<?php
										if(isset($dept_data)){
										foreach($dept_data as $row){
										?>
										<option value="<?php echo $row->dept_id; ?>"><?php echo $row->dept_name; ?></option>
										<?php
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Jabatan </label>
								<div class="col-sm-10">
									<select name="lvl_id" class="form-text" data-placeholder=" = Pilih Jabatan = " style="width:100%;">
										<option value=""></option>
										<?php
										if(isset($lvl_data)){
										foreach($lvl_data as $row){
										?>
										<option value="<?php echo $row->lvl_id; ?>"><?php echo $row->lvl_name; ?></option>
										<?php
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<a href="<?php echo site_url('persons')?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Cancel</a>
									<button type="submit" class="btn btn-info"><i class="icon fa fa-check-square"></i> Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>