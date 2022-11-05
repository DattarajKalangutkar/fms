<?php
  include "../../frontend_config.php";
  $page_title = "Login";
?>
<?php include "../../extra/top_header.php";?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>SuperAdmin Login</h4>
              <form class="pt-3">
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="userPhone" id="userPhone" placeholder="UserPhone">
                </div>
                <div class="form-group" id="onceafterphone" style="display:none">
                  <input type="text" class="form-control form-control-lg" id="userOTP" name="userOTP" placeholder="OTP">
                </div>
                <div class="form-group" id="onceafterOTPVerified" style="display:none">
                  <input type="password" class="form-control form-control-lg" id="userPassword" name="userPassword" placeholder="Password">
                </div>
                <div class="mt-3" id="startbutton">
                  <input type="button" onclick="validate();" name="" value="SIGN IN" class="btn btn-inverse-primary btn-fw">
                </div> 
                <div class="mt-3" id="onceafterphoneverified" style="display:none">
                  <input type="button" onclick="validateVerifyOtp();" name="" value="SIGN IN" class="btn btn-inverse-primary btn-fw">
                </div>
                <div class="mt-3" id="onceafterotpverified" style="display:none">
                  <input type="button" onclick="validateVerifypassword();" name="" value="SIGN IN" class="btn btn-inverse-primary btn-fw">
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
  <?php include "../../extra/bottom_footer.php";?>
</body>
</html>
<script>
  function validate()
  {
    var phone = document.getElementById("userPhone").value;
    if(phone == "")
    {
      alertify.error('Please enter Phone');
      document.getElementById("userPhone").focus();
      return false;
    }

    var data = {
      "identifier":"getOTP",
      "userphone":phone
    };

    $.ajax({
      type: "POST",
      url: '<?php echo $backend_links['api_url']."superadmin/ajax.inc.php";?>',
      data: data,
      success: function(res){
        var responseData = JSON.parse(res);
        console.log(res);
        if(responseData.flag) {
          document.getElementById("onceafterphone").style.display = "block";
          document.getElementById("startbutton").style.display = "none";
          document.getElementById("onceafterphoneverified").style.display = "block";
          document.getElementById("userPhone").disabled = true;
        } else {
          
        }    
      },
    });
  }

  function validateVerifyOtp()
  {
    var phone = document.getElementById("userPhone").value;
    var otp = document.getElementById("userOTP").value;
    if(otp == "")
    {
      alertify.error('Please enter OTP');
      document.getElementById("userOTP").focus();
      return false;
    }

    var data = {
      "identifier":"verifyOTP",
      "userphone":phone,
      "otp":otp
    };

    $.ajax({
      type: "POST",
      url: '<?php echo $backend_links['api_url']."superadmin/ajax.inc.php";?>',
      data: data,
      success: function(res){
        var responseData = JSON.parse(res);
        if(responseData.flag) {
          document.getElementById("onceafterOTPVerified").style.display = "block";
          document.getElementById("startbutton").style.display = "none";
          document.getElementById("onceafterphoneverified").style.display = "none";
          document.getElementById("onceafterotpverified").style.display = "block";
          document.getElementById("userPhone").disabled = true;
          document.getElementById("userOTP").disabled = true;
        } else {
          
        }    
      },
    });
  }

  function validateVerifypassword()
  {
    var userPassword = document.getElementById("userPassword").value;
    if(userPassword == "")
    {
      alertify.error('Please enter password');
      document.getElementById("userPassword").focus();
      return false;
    }

    var data = {
      "identifier":"verifyadmin",
    };

    if(userPassword == "admin")
    {
      $.ajax({
        type: "POST",
        url: '<?php echo $backend_links['api_url']."superadmin/ajax.inc.php";?>',
        data: data,
        success: function(res){
          var responseData = JSON.parse(res);
          window.location.href = "setsession.php?token="+responseData.token;
        },
      });
    }
  }
</script>
