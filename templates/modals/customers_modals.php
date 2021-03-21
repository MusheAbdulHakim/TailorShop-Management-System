<!-- add customer modal starts here -->
	<div class="modal wobble text-left" id="add-customer" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Customer</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<label>Full Name: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer fullname" name="fullname" class="form-control">
						</div>

						<label>Address: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer address" name="address" class="form-control">
						</div>

						<label>Telephone: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer phone number" name="phone" class="form-control">
						</div>

						<label>City: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer city" name="city" class="form-control">
						</div>

						<label>Email: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer email" name="email" class="form-control">
						</div>

						<label>Commment: </label>
						<div class="form-group">
							<textarea name="comment" placeholder="enter comment about customer" class="form-control"></textarea>
						</div>

						<label>Sex: </label>
						<div class="form-group">
							<select name="sex" class="select2 form-control">
								<optgroup>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</optgroup>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
						<input type="submit" class="btn btn-outline-primary btn-lg" value="Submit" name="add_customer">
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add customer modal ends here -->
<div class="modal wobble text-left" id="add-customer" tabindex="-1" role="dialog" aria-labelledby="EditCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Edit Customer</label>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<label>Full Name: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer fullname" name="fullname" class="form-control">
						</div>

						<label>Address: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer address" name="address" class="form-control">
						</div>

						<label>Telephone: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer phone number" name="phone" class="form-control">
						</div>

						<label>City: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer city" name="city" class="form-control">
						</div>

						<label>Email: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter customer email" name="email" class="form-control">
						</div>

						<label>Commment: </label>
						<div class="form-group">
							<textarea name="comment" placeholder="enter comment about customer" class="form-control"></textarea>
						</div>

						<label>Sex: </label>
						<div class="form-group">
							<select name="sex" class="select2 form-control">
								<optgroup>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</optgroup>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
						<input type="submit" class="btn btn-outline-primary btn-lg" value="Update" name="update">
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- edit customer modal starts here -->

<!-- edit customer modal ends here -->

<!-- deleting customers modal starts here -->

<!-- deleting customers modal ends here -->
