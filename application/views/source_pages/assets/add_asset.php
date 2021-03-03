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
						<form class="form-horizontal" method="post" action="<?php echo site_url('assets/insert_asset')?>">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Kode Asset </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="ast_id" value="<?php echo $asset_kd; ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Asset </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="ast_name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi </label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="ast_desc" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Kategori </label>
								<?php
								if(isset($cat_data)){
								foreach($cat_data as $row){
								?>
								<div class="radio3 radio-check radio-inline">
									<input type="radio" id="<?php echo $row->cat_id; ?>" name="cat_id" value="<?php echo $row->cat_id; ?>">
									<label for="<?php echo $row->cat_id; ?>">
										<?php echo $row->cat_name; ?>
									</label>
								</div>
								<?php }
								}
								?>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">User </label>
								<div class="col-sm-10">
									<select name="person_id" data-placeholder=" = Select User = " style="width:100%;">
										<option value=""></option>
										<?php
										if(isset($user_data)){
										foreach($user_data as $row){
										?>
										<option value="<?php echo $row->person_id; ?>"><?php echo $row->full_name; ?></option>
										<?php
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Area </label>
								<div class="col-sm-10">
									<select name="area_id" class="form-text" data-placeholder=" = Select Area = " style="width:100%;">
										<option value=""></option>
										<?php
										if(isset($area_data)){
										foreach($area_data as $row){
										?>
										<option value="<?php echo $row->area_id; ?>"><?php echo $row->area_name; ?></option>
										<?php
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<a href="<?php echo site_url('assets')?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Cancel</a>
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