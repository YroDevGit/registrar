<?php session_destroy() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  <!-- loader-->
  <link href="<?=assets?>/css/pace.min.css" rel="stylesheet"/>
  <script src="<?=assets?>/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="<?=assets?>/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?=assets?>/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?=assets?>/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?=assets?>/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?=assets?>/css/app-style.css" rel="stylesheet"/>
  <?php code_library() ?>
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="<?=assets("img/wvsulogo.png")?>" alt="logo icon" height="100" width="100">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3" id="pagelogin">Sign In</div>
		    <form id="pageloginform">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
        <label id="username" style="color:red;"></label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
        <label id="password" style="color:red;"></label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  
			 </div>
			</div>
			 <button type="submit" class="btn btn-primary btn-block">Sign In</button>
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Do not have an account? <a href="<?=page("register")?>"> Sign Up here</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
        <li id="themeschool"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->

	
  <!-- Bootstrap core JavaScript-->
  <script src="<?=assets?>/js/jquery.min.js"></script>
  <script src="<?=assets?>/js/popper.min.js"></script>
  <script src="<?=assets?>/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="<?=assets?>/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="<?=assets?>/js/app-script.js"></script>
  <style>
    .card{
      background-color: rgba(0, 0, 0, .8);
    }
    
  </style>
  
</body>
</html>



<script>
    on_submit("#pageloginform", async()=>{
        event.preventDefault();

        
        $data = {
            username: get_value("#exampleInputUsername"),
            password: get_value("#exampleInputPassword")
        }

        $tr = jspost_validation($data,[
          ["username", "Username", "username", "required"],
          
        ]);
        if($tr == false){
          return;
        }
        loadingpage(true);
        $response = await mypost("/Action/loginuser", $data);
        $backend = $response?.backend ?? [];
        if($backend.code == 4||$backend.code == 5){
          loadingpage(false);
          $errors =  $backend.errors;
          Swal.fire({
            title: "Error",
            text: $backend.message,
            icon: "error"
          });
          document.getElementById("username").innerHTML = "";
          document.getElementById("password").innerHTML = "";
          for(const key in $errors){
            document.getElementById(key).innerHTML = $errors[key];
          }
          return;
        }
        $isvalid = $backend.rowcount ?? 0;
        
        if($isvalid == 0){
          loadingpage(false);
          Swal.fire({
            title: "ERROR",
            text: "Account not found.!",
            icon: "error",
            confirmButtonText: "Okay"
        }).then(()=>{
            
        });
        return;
        }
        
        $user_info = $response?.backend?.first_row ?? {};
        $fullname = $user_info?.firstname + " " + $user_info?.middlename + " " + $user_info?.lastname;
        $type = $user_info?.type ?? "student";
        if($type == "admin"){
          getlocation($user_info.id,()=>{
            loadingpage(false);
            Swal.fire({
            title: "SUCCESS",
            text: "You are now logged in as "+$fullname,
            icon: "success",
            confirmButtonText: "Okay"
            }).then(()=>{
              js_href("<?=page("admin/pending")?>");
            });
          });
          
        return;
        }else if($type == "student"){
          getlocation($user_info.id,()=>{
            loadingpage(false);
            Swal.fire({
              title: "SUCCESS",
              text: "You are now logged in as "+$fullname,
              icon: "success",
              confirmButtonText: "Okay"
              }).then(()=>{
                js_href("<?=page("student/grade")?>");
              });
          });
          return;
        }
        loadingpage(false);
        $status = $user_info?.status ?? 0;

        if($status == 0){
          Swal.fire({
            title: "ERROR",
            text: "Account is not active, please wait admin approval.!",
            icon: "error",
            confirmButtonText: "Okay"
        }).then(()=>{
            
        });
        return;
        }
        if($status == 1){
          Swal.fire({
            title: "SUCCESS",
            text: "You are now logged in as "+$fullname,
            icon: "success",
            confirmButtonText: "Okay"
        }).then(()=>{
          js_href("<?=page("user/dashboard")?>");
        });
        return;
        }
        if($status == 2){
          Swal.fire({
            title: "ERROR",
            text: "Account is Disabled, please contact administrator.!",
            icon: "error",
            confirmButtonText: "Okay"
        }).then(()=>{
            
        });
        return;
        }


        
    });
</script>

<script>
async function getlocation(id, action){
  $device =navigator.userAgent;
  navigator.geolocation.getCurrentPosition(async function(position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    $data = {lat:lat, long:lon, id:id, device: $device};
    $res = await mypost("action/getlocation", $data);
    if($res.backend?.code != 200){
      alert("Unable to get the location");
      return;
    }
    log($res);
    action();
});
}
</script>

<script>
  on_load(()=>{
    
    setTimeout(()=>{
      document.getElementById("themeschool").click();
    }, 1000);
  });
</script>
<script>
  function loadingpage(loading =true){
    $loader = document.querySelector(".pace");
    if(loading){
      $loader.className = "pace pace-active";
      return;
    }
    $loader.className = "pace pace-inactive";
  }
</script>