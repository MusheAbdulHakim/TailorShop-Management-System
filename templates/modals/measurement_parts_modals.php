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
<!-- delete modal -->
<!-- Modal -->
									<div class="modal fade text-left" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10"
									 aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header bg-danger white">
													<h4 class="modal-title white" id="myModalLabel10">Basic Modal</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h5>Check First Paragraph</h5>
													<p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot
														cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
														liquorice. Apple pie sugar plum powder donut soufflé.</p>
													<p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy
														cake.</p>
													<hr>
													<h5>Some More Text</h5>
													<p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish.
														Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-outline-danger">Save changes</button>
												</div>
											</div>
										</div>
									</div>