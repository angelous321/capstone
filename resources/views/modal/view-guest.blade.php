<form action="" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        @foreach ($users as $user)
        <h6><strong>Name:</strong> </h6><br>
        <h6><strong>Email:</strong></h6><br>
        <h6><strong>Password:</strong></h6><br>
        @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
