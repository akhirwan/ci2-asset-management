<!-- Main Content -->
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><?php echo $title?></h4>
		</div>
		<form class="form-horizontal" method="post" action="<?php echo site_url('assets/insert_spec_batch')?>">
		<div class="modal-body">
			<table class="table table-striped table-bordered" width="100%" cellspacing="0">
				<thead>
					<tr>
						<td>Attributes</td>
						<td>Values</td>
					</tr>
				</thead>
				<?php
				if (isset($asset_data_id)){
					foreach($asset_data_id as $row){
						?>
				<tbody>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="IP Address">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="Processor">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="Motherboard">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="Harddisk">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="RAM">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="Power Supply">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="other">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="other">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="other">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" class="form-control" name="astid[]" value="<?php echo $row->ast_id; ?>">
							<input type="text" class="form-control" name="attr[]" value="other">
						</td>
						<td>
							<input type="text" class="form-control" name="value[]">
						</td>
					</tr>
				</tbody>
				<?php }
				}
				?>
			</table>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><i class="icon fa fa-remove"> Cancel</i></button>
			<button type="submit" class="btn btn-success"><i class="icon fa fa-check-square"></i> Submit</button>
		</div>
		</form>
	</div>
</div>