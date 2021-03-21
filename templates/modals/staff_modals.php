<!-- add staff modal starts here -->
	<div class="modal wobble text-left" id="add-staff" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Staff </label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">

						<div class="form-group">
							<select name="designation" class="select2 form-control">
								<optgroup>
									<option value="none" selected disabled>Select Staff Designation</option>
									<?php 
										$designations = DB::query("SELECT id, Title FROM staff_designation ORDER BY id");
										foreach($designations as $designation):

									 ?>
										<option value="<?php echo $designation['Title']; ?>"><?php echo $designation['Title']; ?></option>
									<?php endforeach; ?>
								</optgroup>
							</select>
						</div>
						
						<div class="form-group">
							<label>Full Name: </label>
							<div class="position-relative has-icon-left">
								<input required type="text" id="fullname" class="form-control" placeholder="mushe abdul-hakim" name="fullname">
								<div class="form-control-position">
									<i class="ft-user"></i>
								</div>
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<div class="position-relative has-icon-left">
								<input required type="text" id="address" class="form-control" placeholder="customer address" name="address">
								<div class="form-control-position">
									<i class="la la-map-marker"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<select name="gender" class="select2 form-control">
								<optgroup>
									<option value="none" selected>Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
								</optgroup>
							</select>
						</div>

						<div class="form-group">
							<label for="phone">Phone Number</label>
							<div class="position-relative has-icon-left">
								<input required type="text" id="phone" class="form-control" name="phone">
								<div class="form-control-position">
									<i class="ft-phone"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Salary</label>
								<div class="input-group mt-0">
									<div class="input-group-prepend">
										<span class="input-group-text"><?php echo currency; ?></span>
									</div>
								<input type="number" class="form-control" placeholder="Salary" name="salary">
							<div class="input-group-append">
								<span class="input-group-text">.00</span>
							</div>
						</div>
					</div>		

					</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add_staff" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add staff modal ends here