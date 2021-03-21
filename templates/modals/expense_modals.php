<!-- add expense modal starts here -->
	<div class="modal wobble text-left" id="add-expense" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Expense </label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">

						<div class="form-group">
							<select name="category" class="select2 form-control">
								<optgroup>
									<option value="none" selected disabled>Select Expense Category</option>
									<?php 
										$expense_categories = DB::query("SELECT id, title FROM expense_category ORDER BY id");
										foreach($expense_categories as $category):

									 ?>
										<option value="<?php echo $category['title']; ?>"><?php echo $category['title']; ?></option>
									<?php endforeach; ?>
								</optgroup>
							</select>
						</div>
						
						<div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" rows="3" class="form-control" name="description" placeholder="expense description"></textarea>
            </div>

            <div class="form-group">
              <label for="date">Date </label>
              <input type="date" id="date" class="form-control" name="expense_date">
            </div>

            <div class="form-group">
							<label>Amount</label>
							<div class="input-group mt-0">
								<div class="input-group-prepend">
									<span class="input-group-text"><?php echo currency; ?></span>
								</div>
								<input type="number" id="amount" class="form-control" placeholder="enter the amount" name="amount">
								<div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
						<button type="submit" name="add_expense" class="btn btn-outline-primary btn-lg">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add expense modal ends here