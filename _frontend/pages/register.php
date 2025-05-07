<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Multi-Step Register</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, skyblue, blue, violet);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 10px;
      width: 420px;
      color: #fff;
    }

    .step-indicator {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .step {
      text-align: center;
      flex: 1;
      position: relative;
    }

    .step .circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: #ccc;
      color: black;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      font-weight: bold;
    }

    .step.active .circle {
      background: violet;
      color: #000;
    }

    .step::after {
      content: '';
      position: absolute;
      top: 15px;
      right: -50%;
      width: 100%;
      height: 4px;
      background: #ccc;
      z-index: 0;
    }

    .step:last-child::after {
      display: none;
    }

    .step.active::after {
      background: violet;
    }

    .form-step {
      display: none;
      animation: fade 0.5s ease-in-out;
    }

    .form-step.active {
      display: block;
    }

    @keyframes fade {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px;
      border: none;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button {
      background: violet;
      color: #000;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    .step-buttons {
      display: flex;
      justify-content: space-between;
    }

    .form-control {
      width: 100%;
      height: 30px;
    }

    .cb {
      font-weight: bold;
    }

    .filechooser {
      width: 100%;
      height: 35px;
      padding: 5px;
      font-size: 18px;
      margin: 10px 0 20px;
      border: none;
      border-radius: 5px;
      box-sizing: border-box;

    }
  </style>
  <?php include_page("admin/lib") ?>
</head>

<body>

  <div class="form-container">
    <div class="step-indicator">
      <div class="step active" id="indicator1">
        <div class="circle">1</div>
      </div>
      <div class="step" id="indicator2">
        <div class="circle">2</div>
      </div>
      <div class="step" id="indicator3">
        <div class="circle">3</div>
      </div>
      <div class="step" id="indicator4">
        <div class="circle">4</div>
      </div>
      <div class="step" id="indicator5">
        <div class="circle">5</div>
      </div>
    </div>

    <form id="multiStepForm" enctype="multipart/form-data">
      <!-- Step 1 -->
      <div class="form-step active" id="step1">
        <h2>Step 1: User type</h2>
        <select name="usertype" id="usertype" class="form-control cb">
          <option value="">Select User Type</option>
          <option value="<?= encrypt('student') ?>">Student</option>
          <option value="<?= encrypt('admin') ?>">Admin</option>
        </select>
        <div class="step-buttons">
          <a href="<?= page() ?>"><button type="button">Login</button></a>
          <button type="button" onclick="nextStep(1)">Next</button>

        </div>
      </div>

      <!-- Step 2 -->

      <div class="form-step" id="step2" style="max-height: 500px; overflow-y: auto;">
        <div style="padding: 10px 0px 10px 0px;">
          <h2>Step 2: Basic Info</h2>



          <div><span>First name:</span></div>
          <input type="text" id="firstname" name="firstname" placeholder="First Name" required />
          <div><span>Last name:</span></div>
          <input type="text" id="lastname" name="lastname" placeholder="Last Name" required />
          <div><span>Middle name:</span></div>
          <input type="text" id="middlename" name="middlename" placeholder="Middle Name" required />
          <div><span>Birth Date:</span></div>
          <input type="date" id="bdate" name="bdate" placeholder="Birth Date" required />

          <div id="args1" style="padding:17px 0px 17px 0px;">
            
          </div>

        </div>
        <div class="step-buttons">
          <button type="button" onclick="prevStep(2)">Back</button>
          <button type="button" onclick="nextStep(2)">Next</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="form-step" id="step3">
        <div style="padding: 10px 0px 10px 0px;">
          <h2>Step 3: Image</h2>
          <input class="form-control filechooser" type="file" id="img" accept="image/*" name="img" />
        </div>

        <div class="step-buttons">
          <button type="button" onclick="prevStep(3)">Back</button>
          <button type="button" onclick="nextStep(3, true)">Next</button>
        </div>
      </div>

      <div class="form-step" id="step4">
        <h2>Step 4: Account Details</h2>
        <input type="text" name="username" id="username" placeholder="Username" required />
        <input type="password" name="password" id="password" placeholder="Password" required />
        <div class="step-buttons">
          <button type="button" onclick="prevStep(4)">Back</button>
          <button type="button" onclick="nextStep(4)">Next</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="form-step" id="step5">
        <h2>Step 5: Confirm</h2>
        <p>You're almost done! Click submit to finish.</p>
        <div class="step-buttons">
          <button type="button" onclick="prevStep(5)">Back</button>
          <button type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    function updateStepIndicator(current) {
      for (let i = 1; i <= 5; i++) {
        const indicator = document.getElementById(`indicator${i}`);
        indicator.classList.remove('active');
        if (i <= current) {
          indicator.classList.add('active');
        }
      }
    }

    function nextStep(current, validated = false) {
      if (current == 1) {
        let select = document.getElementById("usertype");
        let selectedText = select.options[select.selectedIndex].text;
        if (selectedText == "Admin") {
          document.getElementById("args1").innerHTML = ``;
        } else {
          document.getElementById("args1").innerHTML = `
          <div>Course & Major</div>
            <select name="coursemajor" class="form-control" id="coursemajor">
              <option value="0">Select Course</option>
            </select>
            <div style="margin-top:15px;">.</div>
            <div><span>Primary Education:</span></div>
            <input type="text" id="primaryed" name="primaryed" placeholder="Primary Education" required />
            <div><span>Year:</span></div>
            <input type="year" id="pyear" name="pyear" placeholder="" required />
            <div><span>Secondary Education:</span></div>
            <input type="text" id="secondary" name="secondary" placeholder="Secondary Education" required />
            <div><span>Year:</span></div>
            <input type="year" id="syear" name="syear" placeholder="" required />
            <div><span>SHS:</span></div>
            <input type="text" id="shs" name="shs" placeholder="Secondary Education" required />
            <div><span>Year:</span></div>
            <input type="year" id="shsyear" name="shsyear" placeholder="" required />
          `;
          loadCourses();
        }

        if (usertype == "") {
          Swal.fire({
            title: "User Type Required",
            text: "Please select a user type.",
            icon: "error",
            confirmButtonText: "OK"
          });
          return;
        }
      }
      const inputs = document.querySelectorAll(`#step${current} input, #step${current} select`);
      let valid = true;
      if (!validated) {
        inputs.forEach(input => {
          if (!input.value.trim()) {
            input.style.border = '2px solid red';
            valid = false;
          } else {
            input.style.border = 'none';
          }
        });
      }
      if (valid) {
        document.getElementById(`step${current}`).classList.remove('active');
        document.getElementById(`step${current + 1}`).classList.add('active');
        updateStepIndicator(current + 1);
      }
    }

    function prevStep(current) {
      document.getElementById(`step${current}`).classList.remove('active');
      document.getElementById(`step${current - 1}`).classList.add('active');
      updateStepIndicator(current - 1);
    }
  </script>


  <script>
    async function loadCourses(){
      let coursemajor = await myget("/action/getactivecourse");
      $data = coursemajor?.backend?.data ?? [];
      $data.forEach(column => {
        add_html("#coursemajor", `<option value="${column.id}">${column.course} ${column.major}-${column.year}-${column.section}</option>`);
      });
    }
    on_submit("#multiStepForm", async function(event) {
      event.preventDefault();
      let form = get_form_data("#multiStepForm");
      form["img"] = await jsinput_to_base64("#img");
      let fetch = await mypost("insert/user", form);
      let backend = fetch.backend;
      if (backend.code == 200) {
        Swal.fire({
          title: "Registration Successful",
          text: backend.message,
          icon: "success",
          confirmButtonText: "OK"
        }).then((result) => {
          reload();
        });

      } else {
        Swal.fire({
          title: "Registration Failed",
          text: backend.message,
          icon: "error",
          confirmButtonText: "OK"
        }).then((result) => {
          //reload();
        });

      }

    });
  </script>

</body>

</html>