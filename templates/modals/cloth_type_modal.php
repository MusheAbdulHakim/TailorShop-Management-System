<!-- add cloth types modal starts here -->
	<div class="modal zoomIn text-left" id="add-cloth-type" tabindex="-1" role="dialog" aria-labelledby="add-cloth-type" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Cloth Types</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<div class="form-body">
							<div class="form-group">
								<label for="title">Cloth Type Name: </label>
								<input type="text" id="title" class="form-control" placeholder="Cloth Type Name" name="cloth_type_name">
							</div>
							<div class="form-group">
								<label for="gender">Gender: </label>
								<select id="gender" name="gender" class="form-control">
									<option selected disabled value="Null">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add cloth types modal ends here-->

<!-- edit cloth types modal -->
<div class="modal zoomIn text-left" id="edit-cloth-type" tabindex="-1" role="dialog" aria-labelledby="add-cloth-type" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" >Add Cloth Types</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<div class="form-body">
							<div class="form-group">
								<label>Cloth Type Name: </label>
								<input type="text" class="form-control title" placeholder="Cloth Type Name" name="cloth_type_name">
							</div>
							<div class="form-group">
								<label>Gender: </label>
								<select name="gender" class="form-control">
									<option selected disabled value="Null">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="delete" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>