<?php
  include "../../backend/api_function.php";
  include "../../backend/api/config_transcation.php";
  $page_title = "Register";
  $department_type = $api_url.'master/master.php?modules=department';
  $data_department = json_decode(file_get_contents($department_type),true);
?>
<?php include "../extra/top_header.php";?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Registeration</h4>
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputusername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputName" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" id="exampleInputPhone1" placeholder="Phone">
                </div>
                <div class="form-group">                  
                    <select class="js-example-basic-single w-100" id="department" name="department">
                      <option value="0">Select the Department</option>
                      <?php
                        foreach($data_department['rows'] as $key=>$value)
                        {
                      ?>
                          <option value="<?php echo $value['id'];?>"><?php echo $value['departmentName'];?></option>
                      <?php
                        }
                      ?>
                    </select>                  
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox"  id="exampleInputIshod" class="form-check-input"> Are you a HOD? 
                    <i class="input-helper"></i></label>
                  </div>
                </div>
                <div class="mt-3" style="display: flex;">
                  <button type="button" class="btn btn-inverse-primary btn-fw" onclick="register()">Register</button>
                  <button type="button" class="btn btn-inverse-light btn-fw" onclick="window.location.href='index.php';">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php include "../extra/bottom_footer.php";?>
</body>
</html>

<script>
function register()
{
  if (document.getElementById("exampleInputusername1").value == 0) {
    alertify.error("Enter Username");
    document.getElementById("exampleInputusername1").focus();
    return false;
  }
  if (document.getElementById("exampleInputPassword1").value == 0) {
    alertify.error("Enter Password");
    document.getElementById("exampleInputPassword1").focus();
    return false;
  }
  if (document.getElementById("exampleInputName").value == 0) {
    alertify.error("Enter Your Name");
    document.getElementById("exampleInputName").focus();
    return false;
  }
  if (document.getElementById("exampleInputPhone1").value == 0) {
    alertify.error("Enter Your Phone No");
    document.getElementById("exampleInputPhone1").focus();
    return false;
  }
  if (document.getElementById("exampleInputPhone1").value.length>0 && document.getElementById("exampleInputPhone1").value.length != 10) {
      alertify.error("Enter Valid Phone No");
      document.getElementById("exampleInputPhone1").focus();
      return false;
  }
  if (document.getElementById("department").value == 0) {
    alertify.error("Select Department");
    document.getElementById("department").focus();
    return false;
  }
  var payload = {
    "userName": document.getElementById("exampleInputusername1").value,
    "userPassword": document.getElementById("exampleInputPassword1").value,
    "userUsername": document.getElementById("exampleInputName").value,
    "userPhone": document.getElementById("exampleInputPhone1").value,
    "userdepartment": document.getElementById("department").value,
    "userHod": (document.getElementById("exampleInputIshod").checked) ? 1 : 0,
    "userLevel": (document.getElementById("exampleInputIshod").checked) ? 2 : 4,
    "userStatus": 1
  };
  
  $.ajax({
      type: "POST",
      url: '<?php echo "http://localhost/fms/backend/api/auth/userRegister.php"?>',
      data: JSON.stringify(payload),
      processData: false,
      contentType: false,
      success: function (responseDatas) 
      {
        var responseData = JSON.parse(responseDatas);
        if(responseData.flag) {
          alertify.success(responseData.message);
          setTimeout(function(){
            window.location.href = "index.php";
          }, 2000);
        } else {
          alertify.error(responseData.message);
        }
      }
  });
}
</script>