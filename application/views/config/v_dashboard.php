<!-- Main Content -->
<div class="container-fluid">
	<div class="side-body padding-top">
		<?php if ($this->session->userdata('IN') == '0'){ ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-info">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Selamat Datang !!</div>
						</div>
					</div>
					<div class="card-body">
						<div>
							<table class="table table-bordered table-responsive">
							<?php if(isset($config)){
								foreach($config as $row){
							?>
								<tr>
									<td><h3><?php echo $row->app_name?></h3></td>
								</tr>
								<tr>
									<td><h4><?php echo $row->about?></h4></td>
								</tr>
								<tr>
									<td><?php echo $row->address?></td>
								</tr>
								<tr>
									<td><?php echo $row->email?> || <?php echo $row->phone1?> || <?php echo $row->url?></td>
								</tr>
							<?php }
							}
							?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } else {?>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="alert alert-danger" role="alert">
							<strong>Peringatan !</strong> Status anda saat ini sudah <strong>Non Aktif</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div>


