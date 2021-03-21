<!-- add order modal starts here -->
	<div class="modal fade text-left" id="add-order" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Order</label>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="#">
					<div class="modal-body">
						<label>Select Customer: </label>
						<div class="form-group">
							<select name="customer" class="select2 form-control">
								<optgroup>
									<?php 
										$customers = DB::query("SELECT id, FullName FROM customers ORDER BY id");
										foreach($customers as $customer):

									 ?>
									 
										<option value="<?php echo $customer['FullName']; ?>"><?php echo $customer['FullName']; ?></option>
									<?php endforeach; ?>
								</optgroup>
							</select>
						</div>

						<label>Description: </label>
						<div class="form-group">
							<textarea class="form-control" placeholder="enter description here" name="description"></textarea>
						</div>

						<label>Date Received: </label>
						<div class="form-group">
							<input type="date"  name="date_received" class="form-control">
						</div>

						<label>Received By: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter receiver name" name="receiver" class="form-control">
						</div>

						<label>Amount: </label>
						<div class="form-group">
							<input type="text" placeholder="Enter amount charged" name="amount" class="form-control">
						</div>

						<label>Paid: </label>
						<div class="form-group">
							<textarea name="paid" placeholder="enter amount paid" class="form-control"></textarea>
						</div>

						<label>Completed?: </label>
						<div class="form-group">
							<select name="status" class="select2 form-control">
								<optgroup>
									<option value="No">No</option>
									<option value="Yes">Yes</option>
								</optgroup>
							</select>
						</div>
						<label>Date To Collect: </label>
						<div class="form-group">
							<input type="date" class="form-control" name="date_to_collect">
						</div>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
						<input type="submit" class="btn btn-outline-primary btn-lg" value="Submit" name="add_order">
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- add order modal ends here -->