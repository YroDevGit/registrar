<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
          <i class="icon-menu menu-icon"></i>
        </a>
      </li>
      
    </ul>

    <ul class="navbar-nav align-items-center right-nav-link">
      
      <li class="nav-item language" style="display: none;">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="<?= $_SESSION['img'] ?? 'nan' ?>" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
            <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="<?= $_SESSION['img'] ?? 'nan' ?>" alt="user avatar"></div>
                <div class="media-body">
                  <h6 class="mt-2 user-title"><?= $_SESSION['fullname'] ?? "No fullname found!" ?></h6>
                  <p class="user-subtitle"><?= $_SESSION['username'] ?? "No Username found.!" ?></p>
                </div>
              </div>
            </a>
          </li>

          <li class="dropdown-divider"></li>
          <li class="dropdown-item" id="opensettings"><i class="icon-settings mr-2"></i> Setting</li>
          <li class="dropdown-divider"></li>
          <a href="<?= page('login.php') ?>">
            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
          </a>
        </ul>
      </li>
    </ul>
  </nav>
</header>


<!-- change password modal -->
<div class="modal fade" style="color:black;" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
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
<!-- end change password modal -->

<script>
  document.querySelector('#opensettings').addEventListener('click', function() {
    $('#changePasswordModal').modal('show');
  });
</script>

<script>
  document.getElementById('changePasswordForm').addEventListener('submit', async function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    let formData = get_form_data("#changePasswordForm");
    
    
    $result = await mypost("action/changepassword", formData);
    $backend = $result;

    log($result);
    if ($backend.code == 200) {
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: $backend.message,
        showConfirmButton: true,
      }).then((result) => {
        if (result.isConfirmed) {
          reload();
        }
      });
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: $result.message,
        showConfirmButton: true,
      }).then((result) => {
        if (result.isConfirmed) {

        }
      });
    }
  });
</script>