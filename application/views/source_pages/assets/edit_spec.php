<!-- start: Content -->
<div id="content">
	<div class="panel box-shadow-none content-header">
		<div class="panel-body">
			<div class="col-md-12">
				<h3 class="animated fadeInLeft"><i class="fa-search-plus fa"></i> </h3>
				<p class="animated fadeInDown">
					Table <span class="fa-angle-right fa"></span> Data Tables
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="col-md-12 panel">
				<div class="col-md-12 panel-heading">
					<h4><?php echo $title?></h4>
				</div>
				<div class="col-md-12 panel-body" style="padding-bottom:30px;">
					<div class="col-md-12">
						<form class="cmxform" id="signupForm" method="post" action="<?php echo site_url('assets/update_spec_batch')?>">
							<table class="table table-striped table-bordered" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>Attributes</td>
										<td>Values</td>
										<td>Actions</td>
									</tr>
								</thead>
								<?php
								if (isset($spec_data_id)){
									foreach($spec_data_id as $row){
										?>
								<tbody>
									<tr>
										<td>
											<input type="text" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>" readonly>
										</td>
										<td>
											<input type="text" class="form-control" name="attr[]" value="<?php echo $row->attr; ?>">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]"  value="<?php echo $row->value; ?>">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
								</tbody>
								<?php }
								}
								?>
							</table>
							<div class="col-md-12">
								<a href="<?php echo site_url('assets')?>" class="btn btn-default" ><i class="icon fa fa-remove"></i> Cancel</a>
								<button type="submit" class="btn btn-info"><i class="icon fa fa-check-square"></i> Submit</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>  
	</div>
	
</div>
