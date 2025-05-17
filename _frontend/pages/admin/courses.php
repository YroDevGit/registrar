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

    .modal-content {
      color: black;
    }

    .row-y {
      padding-top: 8px;
      padding-bottom: 8px;
    }
  </style>

  <!-- Bootstrap CSS -->


  <!-- Bootstrap JS and Popper.js (needed for modal) -->



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
                <h5 class="card-title">Quarters</h5>
              </div>
              <div style="position:absolute;right:10px;vertical-align:center;top:50%;transform:translateY(-50%);">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD NEW</button>
              </div>
            </div>
          </div>
        </div>




        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List of quarters</h5>
                <div class="table-responsive">
                  <table class="table table-hover" id="coursetbl">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th scope="col">Course</th>
                        <th scope="col">Major</th>
                        <th scope="col">Year</th>
                        <th>Section</th>
                        <th>Sem</th>
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
              <h4 class="modal-title">Add new quarter</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="addquarter">
              <!-- Modal Body -->
              <div class="modal-body">

                <div class="form-group">
                  <?php form_input("Course", "course", "course") ?>
                  <?php form_input("Major", "major", "major") ?>
                  <?php form_input("Year", "year", "year") ?>
                  <?php form_input("Section", "section", "section") ?>
                  <div class="row-y">
                    <label for="">Quarter</label>
                    <select class="form-control" name="quarter" id="quarter">

                    </select>
                  </div>
                </div>

              </div>

              <!-- Modal Footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

  <!-- Edit modal -->
  <div class="modal" id="editModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Quarter</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form id="editquarter">
          <!-- Modal Body -->
          <div class="modal-body">

            <div class="form-group">
                <input type="hidden" id="id" name="id">
              <?php form_input_edit("Course", "course", "course") ?>
                  <?php form_input_edit("Major", "major", "major") ?>
                  <?php form_input_edit("Year", "year", "year") ?>
                  <?php form_input_edit("Section", "section", "section") ?>
                  <div class="row-y">
                    <label for="">Quarter</label>
                    <select class="form-control" name="quarter" id="quarter1">

                    </select>
            </div>
          </div>
          <!-- Modal Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

      <!--End edit modal-->


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


  <!-- Bootstrap core JavaScript-->
  <script src="<?= assets() ?>/js/jquery.min.js"></script>
  <script src="<?= assets() ?>/js/popper.min.js"></script>
  <script src="<?= assets() ?>/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="<?= assets() ?>/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?= assets() ?>/js/sidebar-menu.js"></script>
  <script src="<?= assets() ?>/js/jquery.loading-indicator.js"></script>

  <!-- Custom scripts -->
  <script src="<?= assets() ?>/js/app-script.js"></script>
  <script src="<?= assets() ?>/js/index.js"></script>

<script>
    async function getQuarters(){
        $api = await mypost("Quarters/get");
        $backend = $api.backend;
        $data = $backend.data ?? [];
        $data.forEach(column => {
            $desc = column.description;
            add_html("#quarter" ,  `<option value='${column.id}'>${$desc}</option>`);
            add_html("#quarter1" ,  `<option value='${column.id}'>${$desc}</option>`);
        });
    }
</script>
  <script>
    async function loadQuarters(){
      $result = await mypost("course/get", {
        here: 1
      });
      const table = new DataTable(document.querySelector("#coursetbl"));
      $data = $result?.backend?.data;
      $data.forEach(column => {
        $action = column.status == 0 ? ` <button class='btn btn-success delb' stat = '1' num = '${column.id}'>ENABLE</button>` : `<button class='btn btn-danger delb' stat = '0'  num = '${column.id}'>DISABLE</button>`;
        table.row.add([
          column.id,
          column.course,
          column.major,
          column.year,
          column.section,
          column.sem,
          $action+" "+`<button class='btn btn-warning editbtn' num='${column.id}'>Edit</button>`
        ]).draw();
      });
    }
  </script>

  <script>
    function showEditModal() {
      $allEdit = document.querySelectorAll(".editbtn");
      $allEdit.forEach(element => {
        element.onclick = async function() {
          $id = element.getAttribute("num");
          $api = await mypost("course/getbyid", {
            id: $id
          });
          $backend = $api.backend;
          if ($backend.code == 200) {
            $data = $backend.data[0];
            set_input_value("#id", $data.id);
            set_input_value("#course1", $data.course);
            set_input_value("#major1", $data.major);
            set_input_value("#year1", $data.year);
            set_input_value("#section1", $data.section);
            set_input_value("#quarter1", $data.sem);
            $("#editModal").modal("show");
            $("#editquarter").attr("num", $id);
          }
        }
      });
    }
  </script>
  <script>
    on_submit("#editquarter", async () => {
      event.preventDefault();
      $data = get_form_data("#editquarter");
      $result = await mypost("course/edit",$data);
      $backend = $result?.backend;
      if ($backend.code == 200) {
        Swal.fire({
          title: "Success",
          text: $backend.message,
          icon: "success"
        }).then(() => {
          reload();
        });
      } else {
        Swal.fire({
          title: "Error",
          text: $backend.message,
          icon: "error"
        });
      }
    });
  </script>


  <script>
    on_load(async () => {
      await loadQuarters();
      await deleteQuarter();
      await showEditModal();
      await getQuarters();
    });

    

    function deleteQuarter() {
      $allDeleteQ = document.querySelectorAll(".delb");
      $allDeleteQ.forEach(element => {
        element.onclick = async function() {
          $id = element.getAttribute("num");
          $stat = element.getAttribute("stat");
          $api = await mypost("course/del", {
            stat: $stat,
            id: $id
          });
          $backend = $api.backend;
          if ($backend.code == 200) {
            Swal.fire({
              title: "Success",
              text: "Course updated",
              icon: "success"
            }).then(() => {
              reload();
            })
          }
        }
      });
    }
  </script>
  <script>
    on_submit("#addquarter", async () => {
      event.preventDefault();
      $data = get_form_data("#addquarter");
      $result = await mypost("course/add", $data);
      $backend = $result?.backend;
      if ($backend.code == 200) {
        Swal.fire({
          title: "Success",
          text: $backend.message,
          icon: "success"
        }).then(() => {
          reload();
        });
      } else {
        Swal.fire({
          title: "Error",
          text: $backend.message,
          icon: "error"
        });
      }
    });
  </script>




</body>

</html>