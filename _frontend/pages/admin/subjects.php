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

    select option {
      background-color: white;
    }
    .f-18{
      font-size: 18px;
    }
    .form-control[readonly]{
      background-color: white;
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
                <h5 class="card-title">Subjects</h5>
                <div>
                  <select name="" id="coursemajor">
                    <option value="">Select Course</option>
                  </select>
                </div>
              </div>
              <div style="position:absolute;right:10px;vertical-align:center;top:50%;transform:translateY(-50%);">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD SUBJECT</button>
              </div>
            </div>
          </div>
        </div>




        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List of subjects</h5>
                <div class="table-responsive">
                  <table class="table table-hover" id="subjecttable">
                    <thead>
                      <tr>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date Added</th>
                        <th scope="col">Teacher</th>
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
              <h4 class="modal-title">Subject details</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="addsub">
              <!-- Modal Body -->
              <div class="modal-body">

                <div class="form-group">
                  <?php form_input("Subject", "subject", "Subject name") ?>
                  <?php form_input("Description", "description", "Description") ?>
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


      <div class="modal" id="addteachmodal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Select Teacher</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="addteach">
              <!-- Modal Body -->
              <div class="modal-body">
                <div class="row-y">
                  <label for="">Course: </label>
                  <input type="text" id="thecourse" class="form-control" placeholder="" readonly>
                </div>
                <div class="row-y">
                  <label for="">Subject: </label>
                  <input type="text" id="thesubject" class="form-control" placeholder="" readonly>
                </div>
                <div class="row-y">
                  <label for="">Current teacher: </label>
                  <input type="text" id="tname" class="form-control" placeholder="" readonly>
                </div>

                <div class="row-y">
                  <label for="">Select teacher: </label>
                  <select class="form-control" name="newteacher" id="newteacher">
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

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <?php include_page("admin/footer") ?>
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
    on_load(async () => {
      $result = await mypost("Action/getactivecourse");
      $backend = $result.backend ?? [];
      $data = $backend.data ?? [];

      $data.forEach(column => {
        $cm = column.course + ' ' + column.major + " " + column.year + "-" + column.section;
        add_html("#coursemajor", `<option value='${column.id}'>${$cm}</option>`);
      });
    });


    document.querySelector("#coursemajor").onchange = async function() {
      $val = this.value;
      showSubjects($val);
    }

    async function showSubjects(val) {
      $data = {
        courseid: val
      };
      $api = await mypost("Course/getsubjects", $data);
      $data = $api.backend.data;
      $table = new DataTable(document.querySelector("#subjecttable"));
      $table.clear().draw();

      $data.forEach(column => {
        $status = column.astatus;
        $deletebtn = ``;
        if($status == 1){
          $deletebtn = `<button class='btn btn-danger delbtn'  btn-data="${column.subjectid}" kr="1"><b class="zmdi zmdi-block-alt f-18"></b></button>`;
        }else{
          $deletebtn = `<button class='btn btn-success delbtn' btn-data="${column.subjectid}" kr="0"><b class="zmdi zmdi-chart-donut f-18"></b></button>`;
        }
        $teachername = column.teacherid == null ? "---" : column.firstname + " " + column.lastname;
        $table.row.add([
          column.subject,
          column.description,
          column.date_createdd,
          $teachername,
          `<button class='btn btn-primary'  onclick="showModal(${column.id}, '${$teachername}', '${column.subject}', '${column.subjectid}')"><b class="zmdi zmdi-accounts-add f-18"></b></button> `+$deletebtn
        ]).draw();
      });
      fordel();
    }

    function fordel(){
        $delbtn = document.querySelectorAll(".delbtn");
        $delbtn.forEach(btn => {
          btn.onclick = function(){
            $id = this.getAttribute("btn-data");
            $kr = this.getAttribute("kr");
            $name = this.innerHTML;
            $type = $kr == 0 ? "restore" : "remove";
            Swal.fire({
              title: "Confirmation",
              text: `Are you sure to ${$type} selected subject`,
              icon: "question",
              showCancelButton: true
            }).then(async(result)=>{
              if(result.isConfirmed){
                $api = await mypost("subject/disable",{id:$id, toggle: $kr});
                $backend = $api.backend;
                if($backend.code == 200){
                  Swal.fire(
                    {
                      title: "Success",
                      text: $kr == 1 ? "Subject removed" : "Subject restored",
                      icon: "success"
                      }
                  ).then(()=>{
                    $currentcourse = selected_value("#coursemajor");
                    showSubjects($currentcourse);
                  });
                }
              }
            });
          }
        });
      }

    let selcourse = 0;
    let selsub = 0;
    async function showModal($id, $teacher, $subject, $subid) {
      $("#addteachmodal").modal('show');
      await showActiveTeachers();
      document.querySelector("#thecourse").value = selected_item("#coursemajor");
      selsub = $subid;
      selcourse = selected_value("#coursemajor");
      document.querySelector("#thesubject").value = $subject;
      document.querySelector("#tname").value = $teacher;
    }

    on_submit("#addteach", async()=>{
      event.preventDefault();
      $newteach = get_value("#newteacher");
      $data = {
        newteach: $newteach,
        subid : selsub,
        courseid : selcourse
      };

      $api = await mypost("subject/addteacher", $data);
      $backend = $api.backend;

      if($backend.code == 200){
        Swal.fire({
          title: "Success",
          text: "Teacher assigned",
          icon: "success"
        }).then(()=>{
          $("#addteachmodal").modal("hide");
          $currentcourse = selected_value("#coursemajor");
          showSubjects($currentcourse);
        });
      }else{
        Swal.fire({
          title: "Error",
          text: $backend.message,
          icon: "error"
        });
      }
    });

    async function showActiveTeachers() {
      $api = await mypost("Teacher/getactive");
      $backend = $api.backend;
      set_html("#newteacher",'');
      if($backend.code == 200){
        $data = $backend.data;
        $data.forEach(column => {
          $fullname = column.firstname+" "+column.lastname;
          add_html("#newteacher", `<option value='${column.id}'>${$fullname}</option>`)
        });
      }
    }
  </script>
  <script>
    on_submit("#addsub", async () => {
      event.preventDefault();
      $id = document.querySelector("#coursemajor").value;
      if ($id == "") {
        $("#myModal").modal("hide");
        alert("Please select course first");
        return;
      }
      $data = get_form_data("#addsub");
      $data['coursemajor'] = get_value("#coursemajor");
      $api = await mypost("Subject/add", $data);
      $backend = $api.backend;
      if ($backend.code == 200) {
        Swal.fire({
          title: "Success",
          text: $backend.message,
          icon: "success"
        }).then(() => {
          $("#myModal").modal("hide");
          showSubjects($id);
        });

        return;
      }
      Swal.fire({
        title: "Error",
        text: $backend.message,
        icon: "error"
      }).then(() => {
        //$("#myModal").modal("hide");
      });


    });

      
  </script>




</body>

</html>