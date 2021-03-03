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
							<div class="title"><i class="fa-search-plus fa"></i> Kode Asset :: <?php echo $row->ast_id; ?></div>
						</div>
					</div>
					<div class="card-body">
						<form class="form-horizontal" method="post" action="<?php echo site_url('assets/insert_spec_batch')?>">
							<table class="table table-striped table-bordered" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>Attributes</td>
										<td>Values</td>
										<td>Actions</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
									<tr>
										<td>
											<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
											<input type="text" class="form-control" name="attr[]">
										</td>
										<td>
											<input type="text" class="form-control" name="value[]">
										</td>
										<td width="10%">
											<button type="button" class="btn btn-info"><i class="icon fa fa-plus-square"></i></button>
											<button type="button" class="btn btn-danger"><i class="icon fa fa-minus-square"></i></button>
										</td>
									</tr>
								</tbody>
							</table>
							<div>
								<a href="<?php echo site_url('assets');?>" class="btn btn-default"><i class="icon fa fa-remove"> Cancel</i></a>
								<button type="submit" class="btn btn-info"><i class="icon fa fa-check-square"></i> Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php }
		}
		?>
	</div>
</div>
<script>
function goBack() {
    window.history.back();
}
</script>