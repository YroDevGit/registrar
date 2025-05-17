<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- loader-->
  <link href="<?= assets() ?>/css/pace.min.css" rel="stylesheet" />
  <script src="<?= assets() ?>/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="<?= assets() ?>/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="<?= assets() ?>/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="<?= assets() ?>/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="<?= assets() ?>/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="<?= assets() ?>/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="<?= assets() ?>/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="<?= assets() ?>/css/app-style.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

  <!-- DataTables JS -->

  <style>
    .dataTables_length label select {
      color: white;
    }

    .dataTables_filter label input[type="search"] {
      color: white;
    }
  </style>

  <!-- Bootstrap CSS -->


<!-- Bootstrap JS and Popper.js (needed for modal) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <?php include_page("admin/lib") ?>
</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <?php include_page("admin/sidebar") ?>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <?php include_page("admin/topbar") ?>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pending Students</h5>
              </div>
            </div>
          </div>
        </div>




        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List of users</h5>
                <div style="padding:10px 0px 10px 0px;width:660px;display:flex;">
                  <div style="width: 30%;">
                    <select name="filter" id="filter" class="form-control" style="color:white;background:black;">
                      <option value="all">All</option>
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                      <option value="pending">Pending</option>
                    </select>
                  </div>

                  <div style="width:auto;">
                    <select name="scourse" id="scourse" class="form-control" style="color:white;background:black;">
                      <option value="0">All</option>
                    </select>
                  </div>
                  
                </div>
                <div class="table-responsive">
                  <table class="table table-hover" id="example">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Middle</th>
                        <th scope="col">ID #</th>
                        <th>Course</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!--End Row-->



        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

      </div>
      <!-- End container-fluid-->

      <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Header</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal Body -->
      <div class="modal-body">
        <div align='center'>
          <img src="" height="200" width="200" id="upict" alt="">
        </div>
        <div>
          <div class="text-dark">Fullname</div>
          <div><span id="fullname" class="form-control"></span></div>
        </div>
        <div>
          <div class="text-dark">ID#</div>
          <div><span id="ID" class="form-control"></span></div>
        </div>
        <div>
          <div class="text-dark">Birthdate</div>
          <div><span id="bdate" class="form-control"></span></div>
        </div>
        <div>
          <div class="text-dark">Phone</div>
          <div><span id="phone" class="form-control"></span></div>
        </div>
        <div>
          <div class="text-dark">Address</div>
          <div><span id="address" class="form-control"></span></div>
        </div>
      </div>
      
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      
    </div>
  </div>
</div>

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <?php include_page("admin/theme") ?>
  <!--end color switcher-->
  </div><!--End wrapper-->




  <!-- simplebar js -->
  <script src="<?= assets() ?>/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?= assets() ?>/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="<?= assets() ?>/js/app-script.js"></script>

  <script>
   async function loadUserDisplay(){
    document.querySelectorAll(".idfield").forEach(element => {
      element.onclick = async function(){
        $idfield = this.getAttribute("idfield");
        $api = await mypost("Students/getbyid", {id:$idfield});
        $backend = $api.backend;
        if($backend.code == 200){
          $frow = $backend.first_row;
          $fullname = $frow.firstname+" "+$frow.middlename+" "+$frow.lastname;
          set_html("#fullname", `${$fullname}`);
          set_html("#ID", `${$frow.id}`);
          set_html("#bdate", `${$frow.birthdate}`);
          set_html("#phone", `${$frow.phone || 'not set'}`);
          set_html("#address", `${$frow.address || 'not set'}`);
          document.querySelector("#upict").src = $frow.img;
          const modal = new bootstrap.Modal(document.getElementById('myModal'));
          modal.show();
        }else{
          alert($backend.message);
        }
        
      }
   });
   }
  </script>
  
  <script>
    const table = document.querySelector("#example");
    const dataTable = new DataTable(table);

    async function approveStudent(id, coursemajor) {
      $post = {"id":id, "status":1, coursemajor: coursemajor};

      confirmMessage("Are you sure to proceed?", async()=>{
        const result = await mypost('/Students/approvestudent', $post);
      if (result?.backend?.code == 200) {
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: result?.backend?.message,
        }).then(() => {
          reload();
        });
      } else {
        alert("Error: " + result?.backend?.message);
      }
      });

    }

    async function loadCourses(){
      $res = await mypost("action/getactivecourse");
      $backend = $res.backend;
      if($backend.code == 200){
        $data = $backend.data ?? [];

        $data.forEach(column => {
          $course = column.course+" "+column.major+" "+column.year+"-"+column.section+" ("+column.sem+")";
          add_html("#scourse", `<option value='${column.id}'>${$course}</option>`)
        });
      }
    }

    async function ignoreStudent(id) {
      $post = {"id":id, "status":3};
      confirmMessage("Are you sure to proceed?", async()=>{
        const result = await mypost('/Students/ignoreStudent', $post);
        if (result?.backend?.code == 200) {
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: result?.backend?.message,
          }).then(() => {
            reload();
          });
        } else {
          alert("Error: " + result?.backend?.message);
        }
      })
      
    }

    document.querySelector("#filter").addEventListener("change",async function(){
      await loadStudents();
    });

    document.querySelector("#scourse").addEventListener("change",async function(){
      await loadStudents();
    });


    async function loadStudents(){
      $filter = selected_value("#filter");
      $scourse = selected_value("#scourse");
      $param = {filter:$filter, scourse: $scourse};
      $data = await mypost( '/Students/getStudents', $param);
      $data = $data?.backend?.data ?? [];
      dataTable.clear().draw();
      $data.forEach(column => {
        $status = column.userstat;
        $btn = ``;
        if ($status == 0) {
          $btn = `<button class="btn btn-success" onclick="approveStudent('${column.id}', '${column.cmajor}')">Approve</button> <button class="btn btn-danger" onclick="ignoreStudent('${column.id}')">Decline</button>`;
        } else {
          $btn = `<button class="btn btn-grey" onclick="">Approve</button> <button class="btn btn-danger">Disable</button>`;
        }
        dataTable.row.add([
          `<img src="${column.img}" alt="" height="30" width="30">`,
          column.firstname,
          column.lastname,
          column.middlename,
          `<label class='idfield' idfield='${column.id}'>${column.id}</label>`,
          column.course + " " + column.major + "-" + column.year + "-" + column.section,
          $btn

        ]).draw();
      });
    }

 
$(document).ready(async function() {
      await loadCourses();
      await loadStudents(); 
      await loadUserDisplay();
});

    
  </script>

  <script>
    function confirmMessage($message, $func){
      Swal.fire({
        title: "Confirmation Messsage",
        text: $message,
        icon: "question",
        showCancelButton: true, 
        confirmButtonText: "Yes, do it!",
        cancelButtonText: "No, cancel!",
      }).then((result)=>{
        if(result.isConfirmed){
          $func();
        }
      });
    }
  </script>


</body>

</html>