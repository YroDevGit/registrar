<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Grades</title>
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
    .modal-content{
        color:black;
    }
    .row-y{
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
                <h5 class="card-title">Grades</h5>
                <div id="g_info"></div>
              </div>
              
              <div style="position:absolute;right:10px;vertical-align:center;top:50%;transform:translateY(-50%);">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Search grade</button> <button type="button" class="btn btn-success" id="savechanges">SAVE CHANGES</button>
              </div>
            </div>
          </div>
        </div>




        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title" id="filtertitle">---</h5>
                <div class="table-responsive">
                  <table class="table table-hover" id="gradetable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Grade</th>
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
        <h4 class="modal-title">Filter</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form id="gradefilter">
      <!-- Modal Body -->
      <div class="modal-body">
        
            <div class="form-group">
                <div class="row-y">
                    <label for="">Course & Major</label>
                    <select name="coursemajor" id="coursemajor" class="form-control">
                        <option value="">Select Course Major</option>
                    </select>
                </div>

                <div class="row-y">
                    <label for="">Subjects</label>
                    <select name="subject" id="subjects" class="form-control">
                        <option value="">Select Subject</option>
                    </select>
                </div>

                <div class="row-y">
                    <label for="">Quarter</label>
                    <select name="quarter" id="quarter" class="form-control">
                        <option value="">Select Quarter</option>
                    </select>
                </div>
                <div class="row-y">
                    <label for="">Teacher name:</label>
                    <input style="background-color: white;" id="teachername" type="text" class="form-control" readonly>
                </div>
            </div>


        
      </div>
      
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
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
  <script src="<?=assets()?>/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="<?= assets() ?>/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?= assets() ?>/js/sidebar-menu.js"></script>
  <script src="<?=assets()?>/js/jquery.loading-indicator.js"></script>
  
  <!-- Custom scripts -->
  <script src="<?= assets() ?>/js/app-script.js"></script>
  <script src="<?=assets()?>/js/index.js"></script>
  
  <script>
    on_load(async()=>{
        $result = await mypost("Action/getactivecourse");
        $backend = $result.backend ?? [];
        $data = $backend.data ?? [];
        
        $data.forEach(column => {
            $cm = column.course +' '+column.major + " " +column.year +"-"+column.section;
            add_html("#coursemajor" ,  `<option value='${column.id}'>${$cm}</option>`);
        });
    });

    document.querySelector("#coursemajor").onchange = async function(){
        document.querySelector("#g_info").innerHTML = "";
        $id = document.querySelector("#coursemajor").value;
        set_html("#subjects" ,  `<option value="">Select Subject</option>`);
        set_html("#quarter" ,  `<option value="">Select Quarter</option>`);
        await getSubjects($id);
        await getQuarters();
        setTeachername("");
    }

    function setTeachername(teacher){
      document.querySelector("#filtertitle").innerHTML = teacher;
    }

    async function getSubjects(id){
        $api = await mypost("Subject/getbyid", {id:id});
        $backend = $api.backend;
        $data = $backend.data ?? [];
        $data.forEach(column => {
            $fullname = column.firstname + ' ' + column.lastname;
            add_html("#subjects" ,  `<option tchr = '${$fullname}' value='${column.id}'>${column.subject}</option>`)
        });
    }

    async function getQuarters(){
        $api = await mypost("Quarters/get");
        $backend = $api.backend;
        $data = $backend.data ?? [];
        $data.forEach(column => {
            $desc = column.description;
            add_html("#quarter" ,  `<option value='${column.id}'>${$desc}</option>`)
        });
    }

    document.querySelector("#subjects").onchange = async function(){
        setTeachername("");
        const selectedOption = this.options[this.selectedIndex];
        const strkValue = selectedOption.getAttribute("tchr");
        document.querySelector("#teachername").value = strkValue;
    }

    on_submit("#gradefilter", async()=>{
        event.preventDefault();
        $form_data = get_form_data("#gradefilter");
        $api = await mypost("Grade/get", $form_data);
        $data = $api?.backend?.data ?? [];
        $table = document.querySelector("#gradetable");
        $table = new DataTable($table);
        $table.clear().draw();

        $qrtr = get_value("#quarter");
        
        $data.forEach(column => {
            $grade = column.grade == null ? 0 : column.grade;
            $grade = $grade == 0 ? `<input qrt='${$qrtr}' class='studgrade' myid='${column.userid}' coursemajor='${column.coursemajor}' subject='${column.subject}' teacher='${column.teacher}' type='text' value=''>` :`<input qrt='${$qrtr}' class='studgrade' coursemajor='${column.coursemajor}' myid='${column.userid}' subject='${column.subject}' teacher='${column.teacher}' type='text' value='${$grade}'>`
            $table.row.add([
                column.userid,
                column.firstname+ " " +column.lastname,
                $grade,
                ``
            ]).draw();
        });
        $('#myModal').modal('hide');
        gradeReady();
    });

    
  </script>

  <script>
    function gradeReady(){
        $cmajor = document.querySelector("#coursemajor");
        $cmajor = $cmajor.options[$cmajor.selectedIndex].text;
        $subj = document.querySelector("#subjects");
        $subj = $subj.options[$subj.selectedIndex].text;
        $teacher = document.querySelector("#teachername").value;
        
        document.querySelector("#g_info").innerHTML = $cmajor+" - "+$subj+" ("+$teacher+")";
        $studgrade = document.querySelectorAll('.studgrade');
        $studgrade.forEach(element => {
            
            element.addEventListener("blur",async function(){
                $coursemajor = this.getAttribute('coursemajor');
                $subject = this.getAttribute("subject");
                $teacher = this.getAttribute("teacher");
                $id = this.getAttribute("myid");
                $qrtr = this.getAttribute("qrt");
                $grade = this.value;
                $data = {
                    coursemajor : $coursemajor,
                    subject : $subject,
                    id : $id,
                    grade: $grade,
                    teacher : $teacher,
                    qrt : $qrtr
                }
                $result = await mypost("Grade/update", $data);
                log($result);
            });
        });
    }
  </script>


<script>
  document.querySelector("#savechanges").addEventListener("click", ()=>{
    Swal.fire({
      title: "SUCCESS",
      text: "Data successfully saved",
      icon: "success"
    });
  }); 
</script>




</body>

</html>