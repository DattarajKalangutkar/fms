<?php
  include "../../backend/includes/config.php";
?>
<?php include "../extra/top_header.php";?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Login</h4>
              <form class="pt-3" action="userLogin.php" method="POST">
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="userPhone" id="userPhone" placeholder="UserPhone">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="userPassword" name="userPassword" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" name="" value="SIGN IN" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
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
     function validate()
     {
          var phone = document.getElementById("userPhone").value;
          var password = document.getElementById("userPassword").value;

          if(phone == "")
          {
               alertify.error('Please enter Phone');
               return false;
          }

          if(password == "")
          {
               alertify.error('Please enter Password');
               return false;
          }

          var data = {
               "userPhone":phone,
               "userPassword":password
          };

          
          $.ajax({
              type: "POST",
              url: '<?php echo $api_url."auth/userLogin.php";?>',
              data: JSON.stringify(data),
              processData: false,
              contentType: false,
              success: function (responseDatas) 
              {
                var responseData = JSON.parse(responseDatas);
                if(responseData.flag)
                {
                  sessionStorage.setItem("userData",responseDatas);
                  window.location.href = "basic-table.php";
                }
                else
                {
                  alertify.error(responseData.message);
                }
              }
          });
     }
</script>
