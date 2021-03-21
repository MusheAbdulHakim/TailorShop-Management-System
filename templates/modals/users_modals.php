<!-- add user modal starts here -->
	<div class="modal wobble text-left" id="add-user" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add User</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" enctype="multipart/form-data" action="#">
					<div class="modal-body">
						<label>UserName: </label>
						<div class="form-group">
							<input type="text" required placeholder="Enter username" name="username" class="form-control">
						</div>

						<label>FirstName: </label>
						<div class="form-group">
							<input type="text" required placeholder="Enter firstname" name="firstname" class="form-control">
						</div>
						<label>LastName: </label>
						<div class="form-group">
							<input type="text" required placeholder="Enter lastname" name="lastname" class="form-control">
						</div>

						<label>Email: </label>
						<div class="form-group">
							<input type="email" required placeholder="Enter email address" name="email" class="form-control">
						</div>

						<label>Avatar: </label>
						<div class="form-group">
							<input type="file" name="image" class="form-control">
						</div>

						<label>Telephone: </label>
						<div class="form-group">
							<input type="tel" placeholder="Enter telephone number" name="phone" class="form-control">
						</div>

						<label>Password: </label>
						<div class="form-group">
							<input type="password" required placeholder="Enter password" name="password" class="form-control">
						</div>

						<label>Confirm Password: </label>
						<div class="form-group">
							<input type="password" required placeholder="repeat password" name="confirm_password" class="form-control">
						</div>

						<div class="form-group">
							<select name="status" required class="select2 form-control">
								<optgroup>
									<option value="none" selected>Select Status</option>
										<option value="Active">Active</option>
										<option value="Banned">Banned</option>
								</optgroup>
							</select>
						</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add_user" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
 <!-- add user modal ends here -->

<!-- delete user modal starts here -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form action="delete_sale.php" method="POST">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="delete_id" id="delete_id">
						<p id="acc_msg">are you sure you want to delete <b id="username"></b>?</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-success si_accept_confirm" name="delete" type="submit">Delete</button>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
				</form>
			</div>
		</div>
<!-- delete user modal ends here -->