<div style="color:black;" class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Change Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="changePasswordForm">
            <div class="form-group">
              <label for="currentPassword">Current Password</label>
              <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
            </div>
            <div class="form-group">
              <label for="newPassword">New Password</label>
              <input type="password" class="form-control" id="newPassword" name="newPassword" required>
            </div>
            <div class="form-group">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="form-group">
              <input type="hidden" class="form-control" id="userId" name="userId" value="<?= $_SESSION['id'] ?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <script>
    
    document.querySelector('#accountsettings').addEventListener('click', function() {
        log("dsad");
      $('#changePasswordModal').modal('show');
    });
  </script>

  <script>
    document.querySelector("#changePasswordForm").addEventListener("submit", async function(e){
      e.preventDefault();
      $data = get_form_data("#changePasswordForm");
      $api = await mypost("Action/changepassword", $data);
      $backend = $api.backend;
      if($backend.code == 200){
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: $backend.message,
        }).then(() => {
          $("#changePasswordModal").modal("hide");
        });
        
      }else{
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: $backend.message,
        }).then(() => {
         
        });
      }
    });
  </script>