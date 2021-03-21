<!-- add set measurement modal starts here -->
	<div class="modal zoomIn text-left" id="add-measurement-part" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Set Measurement Parts</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" enctype="multipart/form-data" action="#">
					<div class="modal-body">
						<div class="form-body">
							<div class="form-group">
								<label for="category">Category: </label>
								<select id="category" name="category" class="form-control">
									<option selected disabled value="Null">Select Category</option>
									<?php 
										$categories = DB::query("SELECT title FROM `cloth-types` ORDER BY id");
										foreach($categories as $category):
									 ?>
									<option value="<?php echo $category['title']; ?>"><?php echo $category['title']; ?></option>
								<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="title">Measurement Name</label>
								<div class="position-relative">
									<input required type="text" id="title" class="form-control" placeholder="measurement name" name="title">
								</div>
							</div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" rows="3" class="form-control" name="description" placeholder="Enter description"></textarea>
              </div>
							<div class="form-group">
                <label for="image" class="col-sm-3 control-label">Image</label>
               	<fieldset class="form-group">
                  <div class="custom-file">
                      <input name="image" type="file" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image" aria-describedby="image">Choose image</label>
                  </div>
                </fieldset>
              </div>
						</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add_measurement" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add cloth types modal ends here -->

<div class="modal custom-modal fade" id="delete" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete</h3>
							<input type="hidden" name="delete_id" id="delete_id">
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<button type="submit" name="delete" class="btn btn-primary continue-btn"></button>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</div>
			 </form>
			</div>
		</div>
	</div>