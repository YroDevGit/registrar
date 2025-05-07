<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Teacher Login</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('https://images.unsplash.com/photo-1571260899304-425eee4c7efc') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(2px);
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #2d3e50;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #2e86de;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-container button:hover {
      background-color: #1b4f72;
    }

    .footer-note {
      margin-top: 20px;
      font-size: 12px;
      color: #555;
    }
   

    @media (max-width: 400px) {
      .login-container {
        width: 90%;
      }
    }
  </style>

</head>
<body>
  <div class="login-container">
    <h2>Teacher Login</h2>
    <form id="teacherform">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Log In</button>
    </form>
    <div class="footer-note">Only authorized teachers may access this portal.</div>
  </div>
</body>
</html>
<script src="<?=assets('code/swal.js')?>"></script>
<script src="<?=assets('code/jquery.js')?>"></script>
<script src="<?=assets('code/jspost.js')?>"></script>
<script>
    on_submit("#teacherform", async()=>{
        event.preventDefault();
        $data = get_form_data("#teacherform");

        $api = await mypost("teacher/login",$data);

        $backend = $api.backend;
        $rowcount = $backend?.rowcount ?? 0;
        $firstrow = $backend.first_row;
        $code = $backend.code;
        
        if($rowcount == 0){
            Swal.fire({
            title:  "Failed",
            text: "Account not found.!",
            icon:  "error"
            });
            return;
        }

        $name = $firstrow.firstname;
        $lastname = $firstrow.lastname;
        Swal.fire({
            title:  "LoginSuccess",
            text: "Logged in as "+$name+" "+$lastname,
            icon:  "success"
            });


    });
</script>
