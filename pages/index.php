<?php
    include "../frontend_config.php";
    $page_title = "Login";
?>
<?php include "../extra/top_header.php"; ?>
<style>
    .input-containers 
    {
        position: relative;
        margin: 0rem; 
    }
</style>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex  auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form " style="margin-top:23px ;">
                            <form>
                                <div class="form-group text-center">
                                   <h4 class="text-center">Sign In</h4>
                                </div>
                                <div class="row">
                                   <div class="form-group col-6">
                                      <select name="country_code" class="form-control js-example-basic-single w-100" id="country_code">
                                         <option value="">Select Country code</option>
                                         <option value="+91">India (+91)</option>
                                         <option value="+27">South Africa (+27)</option>
                                         <option value="+55">Brazil (+55)</option>
                                         <option value="+91">Hong Kong (+852)</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-6">
                                      <div class="input-containers ">
                                         <input type="text" class="input form-control" id="userPhone" name="userPhone">
                                         <label for="">Phone Number</label>
                                         <span>Phone Number</span>
                                      </div>
                                   </div>
                                </div>
                                <div id="verify">
                                   <div class=" col-12 text-center">
                                      <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input">
                                      Recieve your OTP on <i class="mdi mdi-whatsapp mdi-17px"></i> WhatsApp
                                      <i class="input-helper"></i></label>
                                   </div>
                                   <div class="form-group ">
                                   </div>
                                   <div class="col-12 text-center">
                                      <button type="button" class="btn btn-primary" id="btn-verify" onclick="verfiyPhoneNumber();">Verify Phone Number</button>
                                   </div>
                                </div>
                                <div id="verify-otp">
                                   <div class="row">
                                      <div class="form-group col-6">
                                         <select name="organisation" class="form-control js-example-basic-single w-100" id="organisation">
                                         </select>
                                      </div>
                                      <div class="form-group col-6">
                                         <div class="input-containers ">
                                            <input type="text" class="input form-control" id="useroTP">
                                            <label for="">OTP</label>
                                            <span>OTP</span>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-12 text-center">
                                      <button type="button" class="btn btn-primary" id="btn-verify" onclick="verifyOtp();">Verify OTP </button>
                                   </div>
                                   <p class="text-center">OTP is valid till :<span id="timer"></span> second</p>
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
   <?php include "../extra/bottom_footer.php"; ?>
</body>
</html>
<script>
    $("#verify-otp").hide();
    function verfiyPhoneNumber() 
    {
        var country_code = document.getElementById("country_code").value;
        var userphone = document.getElementById("userPhone").value;
        if (country_code == "") 
        {
            alertify.error('Please enter country code');
            document.getElementById("country_code").focus();
            return false;
        }

        if (userphone == "") {
            alertify.error('Please enter Phone');
            document.getElementById("userPhone").focus();
            return false;
        }

        var data = {
            "countryCode":country_code,
            "phoneNumber":userphone,
            "optInWhatsapp":"true"
        };

        $.ajax({
            type: "POST",
            url: '<?php echo $backend_links['api_url']."auth/generateOTP.php";?>',
            data: JSON.stringify(data),
            success: function(res)
            {
                var responseData = JSON.parse(res);
                if(responseData.flag) 
                {
                    if(responseData.data.length > 0)
                    {
                        let str = '<option value="0">Select an Organisation</option>';
                        for(let i=0;i<responseData.data.length;i++)
                        {
                            str += "<option value='"+responseData.data[i].id+"'>"+responseData.data[i].name+"</option>";
                        }
                        $("#organisation").html(str);
                    }
                    $("#verify").hide();
                    $("#verify-otp").show();
                } 
                else 
                {

                }    
            },
        });
    }

    function verifyOtp()
    {
        var country_code = document.getElementById("country_code").value;
        var userphone = document.getElementById("userPhone").value;

        var organisation = document.getElementById("organisation").value;
        var useroTP = document.getElementById("useroTP").value;

        if (organisation == "") 
        {
            alertify.error('Please select Organisation');
            document.getElementById("organisation").focus();
            return false;
        }

        if (useroTP == "") {
            alertify.error('Please enter OTP');
            document.getElementById("useroTP").focus();
            return false;
        }

        var data = {
            "countryCode":country_code,
            "phoneNumber":userphone,
            "optInWhatsapp":"true",
            "otp":useroTP,
            "organisationId":organisation
        };

        $.ajax({
            type: "POST",
            url: '<?php echo $backend_links['api_url']."auth/login.php";?>',
            data: JSON.stringify(data),
            success: function(res)
            {
                var responseData = JSON.parse(res);
                if(responseData.flag) 
                {
                    window.location.href = "setsession.php?token="+responseData.token+"&page=user";
                } 
                else 
                {

                }   
            },
        });
    }
   
   
   

    var time_limit = 10;
    var time_out = setInterval(() => {
        if (time_limit == 0) 
        {
            $('#timer').html('Time Over');
        } 
        else 
        {
            if (time_limit < 10) 
            {
                time_limit = 0 + '' + time_limit;
            }
            $('#timer').html(+time_limit);
            time_limit -= 1;
        }
    }, 1000);
</script>