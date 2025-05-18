<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $title ?? "Registrar" ?></title>
  <!-- loader-->
  <link href="<?= assets() ?>/css/pace.min.css" rel="stylesheet" />
  <script src="<?= assets() ?>/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="<?= assets() ?>/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="<?= assets() ?>/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
  <?php include_page("admin/lib") ?>
</head>

<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <?php include_page("admin/sidebar") ?>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <?php include_page('admin/topbar') ?>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">

        <!--Start Dashboard Content-->
        <div class="row">
          <div class="col-4 col-lg-4 col-xl-4">
            <div class="card" align='center'>
              
              <div class="card-body">
                <h4 id="totalcourse"></h4>
                <span>Courses</span>
              </div>
            </div>
          </div>

          <div class="col-4 col-lg-4 col-xl-4">
            <div class="card" align='center'>
              
              <div class="card-body">
                <h4 id="totalteacher"></h4>
                <span>Teacher</span>
              </div>
            </div>
          </div>

          <div class="col-4 col-lg-4 col-xl-4">
            <div class="card" align='center'>
              
              <div class="card-body">
                <h4 id="totalstudent"></h4>
                <span>Students</span>
              </div>
            </div>
          </div>
          

          
        </div><!--End Row-->


          <div class="row">
            <div class="col-12 col-lg-8 col-xl-8">
              <div class="card">
                <div class="card-header">Student Enrollments per month
                  <div class="card-action">
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-inline">
                    <select name="" id="datefilter" style="background-color: white; width:190px;">
                      <?php for ($x = intval(date("Y")); $x >= 1990; $x--): ?>
                        <option style="color:white;" value="<?= $x ?>"><?= $x ?></option>
                      <?php endfor; ?>
                    </select>
                  </ul>
                  <div class="chart-container-1">
                    <canvas id="chart1"></canvas>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
              <div class="card">

                <div class="card-body">
                  <div class="chart-container-2" style="height: 100%;">
                    <img src="<?= assets('img/wvsulogo.png') ?>" alt="" height="100%" width="100%">
                  </div>
                </div>

              </div>
            </div>
          </div><!--End Row-->

          <div class="row">
            <div class="col-12 col-lg-12">
              <div class="card">
                <div class="card-header">Login logs
                  <div class="card-action">
                    <div class="dropdown">
                      <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                        <i class="icon-options"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void();">Action</a>
                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-borderless" id="logtable">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Location</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Device</th>
                        <th>Date</th>

                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div><!--End Row-->

          <!--End Dashboard Content-->

          <!--start overlay-->
          <div class="overlay toggle-menu"></div>
          <!--end overlay-->

        </div>
        <!-- End container-fluid-->

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
    <!-- loader scripts -->
    <script src="<?= assets() ?>/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="<?= assets() ?>/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="<?= assets() ?>/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="<?= assets() ?>/js/index.js"></script>


</body>

</html>


<script>
  document.querySelector("#datefilter").addEventListener("change", async function() {
    var date = this.value;
    loadGraph(date);
  });

  async function loadGraph(date) {
    $result = await mypost("Count/enrolles", {
      date: date
    });
    $backend = $result.backend;
    if ($backend.code == 200) {
      var data = $backend.firstrow;
      setChart(data);
    }
  }
  on_load(async function() {
    $result = await mypost("Count/courses");
    $backend = $result.backend;
    if ($backend.code == 200) {
      $("#totalcourse").html($backend.firstrow.total + " Courses");
    }
  });
</script>

<script>
  function setChart(data) {
    var ctx = document.getElementById('chart1').getContext('2d');

    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
        datasets: [{
          label: 'New Visitor',
          data: [data.Jan, data.Feb, data.Mar, data.Apr, data.May, data.Jun, data.Jul, data.Aug, data.Sep, data.Oct, data.Nov, data.Dec],
          backgroundColor: '#fff',
          borderColor: "transparent",
          pointRadius: "0",
          borderWidth: 3
        }, {
          label: 'Old Visitor',
          data: [data.Jan, data.Feb, data.Mar, data.Apr, data.May, data.Jun, data.Jul, data.Aug, data.Sep, data.Oct, data.Nov, data.Dec],
          backgroundColor: "rgba(255, 255, 255, 0.25)",
          borderColor: "transparent",
          pointRadius: "0",
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: false,
          labels: {
            fontColor: '#ddd',
            boxWidth: 40
          }
        },
        tooltips: {
          displayColors: false
        },
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero: true,
              fontColor: '#ddd'
            },
            gridLines: {
              display: true,
              color: "rgba(221, 221, 221, 0.08)"
            },
          }],
          yAxes: [{
            ticks: {
              beginAtZero: true,
              fontColor: '#ddd'
            },
            gridLines: {
              display: true,
              color: "rgba(221, 221, 221, 0.08)"
            },
          }]
        }

      }
    });
  }
</script>

<script>
  $(function() {


    // chart 1




    // chart 2

    var ctx = document.getElementById("chart2").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Direct", "Affiliate", "E-mail", "Other"],
        datasets: [{
          backgroundColor: [
            "#ffffff",
            "rgba(255, 255, 255, 0.70)",
            "rgba(255, 255, 255, 0.50)",
            "rgba(255, 255, 255, 0.20)"
          ],
          data: [5856, 2602, 1802, 1105],
          borderWidth: [0, 0, 0, 0]
        }]
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          position: "bottom",
          display: false,
          labels: {
            fontColor: '#ddd',
            boxWidth: 15
          }
        },
        tooltips: {
          displayColors: false
        }
      }
    });




  });
</script>

<script>
  async function loadLogs() {
    $result = await mypost("Action/getlogs");
    $backend = $result.backend;
    $table = document.querySelector("#logtable");
    $datatable = new DataTable($table);
    if ($backend.code == 200) {
      $backend.data.forEach(element => {
        $datatable.row.add([
          element.user,
          element.location,
          element.lat,
          element.long,
          element.device,
          element.date_log,
        ]).draw();
      });
    }
  }
</script>

<script>
  async function totalTeachers() {
    $result = await mypost("Count/teachers");
    $backend = $result.backend;
    if ($backend.code == 200) {
      $("#totalteacher").html($backend.firstrow.total);
    }
  }

  async function totalStudents() {
    $result = await mypost("Count/students");
    $backend = $result.backend;
    if ($backend.code == 200) {
      $("#totalstudent").html($backend.firstrow.total);
    }
  }

  async function totalCourses() {
    $result = await mypost("Count/courses");
    $backend = $result.backend;
    if ($backend.code == 200) {
      $("#totalcourse").html($backend.firstrow.total);
    }
  }
</script>

<script>
  window.addEventListener("load", async function() {
    $val = document.querySelector("#datefilter").value;
    loadGraph($val);
    await loadLogs();
    await totalTeachers();
    await totalStudents();
    await totalCourses();
  });
</script>