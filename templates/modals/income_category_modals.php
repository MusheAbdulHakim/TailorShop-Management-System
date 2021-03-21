<!-- add income category modal starts here -->
	<div class="modal zoomIn text-left" id="add-category" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Income Category</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<label>Category Name: </label>
						<div class="form-group">
							<input type="text" required placeholder="Enter Category Name" name="category_name" class="form-control">
						</div>

					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add_category" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add income category modal ends here