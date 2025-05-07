<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Students grade</title>
  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
}

body {
  display: flex;
  min-height: 100vh;
  background: #121212;
  color: #f0f0f0;
}

.sidebar {
  width: 220px;
  background-color: #1e1e2f;
  color: #f0f0f0;
  padding: 20px;
  position: fixed;
  height: 100%;
}

.sidebar h2 {
  margin-bottom: 30px;
  font-size: 22px;
}

.sidebar ul {
  list-style: none;
}

.sidebar ul li {
  margin: 20px 0;
  cursor: pointer;
  transition: color 0.2s;
}

.sidebar ul li:hover {
  color: #ffcc00;
}

.main {
  margin-left: 220px;
  width: calc(100% - 220px);
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.topbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #1c1c1c;
  padding: 15px 30px;
  border-bottom: 1px solid #333;
}

.topbar .logo {
  display: flex;
  align-items: center;
  font-size: 20px;
  font-weight: bold;
  color: #ffcc00;
}

.topbar .logo span {
  margin-left: 10px;
}

.account {
  position: relative;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.account img {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  margin-right: 10px;
}

.account-name {
  font-size: 14px;
  color: #f0f0f0;
}

.dropdown {
  position: absolute;
  top: 45px;
  right: 0;
  background: #2b2b2b;
  box-shadow: 0 4px 8px rgba(0,0,0,0.4);
  border-radius: 5px;
  overflow: hidden;
  display: none;
  z-index: 999;
}

.dropdown a {
  display: block;
  padding: 10px 20px;
  text-decoration: none;
  color: #f0f0f0;
}

.dropdown a:hover {
  background-color: #3a3a3a;
}

.content {
  flex: 1;
  padding: 30px;
}

.content h3 {
  margin-bottom: 20px;
  color: #ffcc00;
}



table thead {
  background-color: #333;
  color: #ffcc00;
}

table th, table td {
  padding: 12px 15px;
  border: 1px solid #444;
  text-align: left;
}

.footer {
  background: #1c1c1c;
  text-align: center;
  padding: 15px;
  font-size: 14px;
  color: #888;
  border-top: 1px solid #333;
}

  </style>
  <?=code_library()?>
</head>
<body>

  <!-- Sidebar -->
  <?php include_page("student/sidebar") ?>

  <!-- Main -->
  <div class="main">

    <!-- Topbar -->
    <?php include_page("student/topbar") ?>

    <!-- Content -->
    <div class="content">
      <div>
        <div style="padding-bottom:20px;">
          <select style="width:230px; font-size:15px; height:30px;" name="" id="quarter">
            <option value="0">Select Quarter</option>
          </select>
        </div>
      </div>
      <h3>Students Table</h3>
      <table id="gradetbl">
        <thead>
          <tr>
            <th>Subject</th>
            <th>Description</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
  
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <?php include_page("student/footer") ?>

  </div>

  <script src="<?=assets('teacher.js')?>"></script>

  <script>
    $table = new DataTable(document.querySelector("#gradetbl"));
  </script>

  <script>
    on_load(async()=>{
      $api = await mypost("Quarters/get");
      $backend = $api.backend;
      $data = $backend.data ?? [];

      $data.forEach(column => {
        add_html("#quarter", `<option value='${column.id}'>${column.description}</option>`);
      });
    });
  </script>

  <script>
    document.querySelector("#quarter").addEventListener("change", async function(){
      $val = this.value;
      if($val == 0){
        $table.clear().draw();
        return;
      }
      $course = "<?=$_SESSION['coursemajor']?>";
      $myid = "<?=$_SESSION['id']?>"

      $data = {
        quarter : $val,
        coursemajor: $course,
        id:$myid
      };
      $api = await mypost("Grade/getbyuser", $data);
      $backend = $api.backend;
      $data = $backend.data ?? [];
      $table.clear().draw();
      $data.forEach(column => {
        $table.row.add([
          column.subject,
          column.description,
          column.grade
        ]).draw();
      });
    });
  </script>

</body>
</html>
