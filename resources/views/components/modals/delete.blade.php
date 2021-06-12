@props(['route'=>$route,'title'=>$title])
<!-- delete modal starts here -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form action="{{route($route)}}" method="post">
			@csrf
			@method("DELETE")
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="acc_title">Delete {{$title}}</h5>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="hidden" name="id" id="delete_id">
				<p>are you sure you want to delete ?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success si_accept_confirm" name="delete" type="submit">Delete</button>
				<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
			</div>
		</div>
		</form>
	</div>
</div>
<!-- delete modal ends here -->