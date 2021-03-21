<!-- add designation modal starts here -->
	<div class="modal wobble text-left" id="add-designation" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Staff Designation</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<label>Designation Name: </label>
						<div class="form-group">
							<input type="text" required placeholder="Enter designation title" name="title" class="form-control">
						</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add_designation" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add designation modal ends here -->
<!-- delete designationmodal starts here -->
<div class="modal wobble text-left" id="delete-designation" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Deleting Designation</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<h3>Are You Sure You Want To Delete <b id="title"></b></h3>
						<div class="form-group">
							<input type="hidden" id="delete_id" name="delete_id" class="form-control">
						</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="delete" class="btn btn-outline-primary btn-lg">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>