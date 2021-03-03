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
							<div class="title"><i class="icon fa fa-cog"></i> <?php echo $title?></div>
						</div>
					</div>
					<?php
					if(isset($config)){
						foreach($config as $row){
							?>
					<div class="card-body">
						<form class="form-horizontal" method="post" action="<?php echo site_url('config/update')?>">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Aplikasi</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="app_name" value="<?php echo $row->app_name; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Perusahaan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="company" value="<?php echo $row->company; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="phone1" value="<?php echo $row->phone1; ?>">
								</div>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="phone2" value="<?php echo $row->phone2; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Faximile</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="fax" value="<?php echo $row->fax; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Website</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="url" value="<?php echo $row->url; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">About</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="about" rows="3"><?php echo $row->about; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label"></label>
								<div class="col-sm-10">
									<button type="submit" class="btn btn-info"><i class="icon fa fa-paper-plane"></i> Update</button>
								</div>
							</div>
						</form>
					</div>
					<?php }
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
