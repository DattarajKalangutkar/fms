<?php
  include "../../backend/api_function.php";
  include "../../backend/api/config_transcation.php";
  $page_title = "Services Registeration";
  $sessiondata = getSessionData();
  $action_services_type = $api_url.'master/master.php?modules=services_types';
  $data_servies_type = json_decode(file_get_contents($action_services_type),true);

  $primary_key = (isset($_GET['id'])) ? $_GET['id']:'';
  $data = [];
  $data["transServiceInwardLetterNo"] = '';
  $data["transdServiceInwardletterDate"] = '';
  $data["transdReceivedFrom"] = '';
  $data["transServiceId"] = '';
  $data["transdReplyToLetterNo"] = '';
  $data["transdReplyToLetterDate"] = '';
  $data["transdSubject"] = '';
  $data["transdReceiptDate"] = '';
  $data["transdReplyNo"] = '';
  $data["transdReplyDate"] = '';
  $data["transdRemarks"] = '';

  if($primary_key != '')
  {
    $action = $api_url."transcation/services_list.php";
    $action .= '?id='.$primary_key;
    
    $data = json_decode(file_get_contents($action),true);
    $data = $data['rows'];
  }
?>
<?php include "../extra/top_header.php";?>
<body>
  <style type="text/css">
    .textclass
    {
      opacity: 1;
      border: 2px solid #dee2e6;
      font-weight: 400;
      font-size: 0.875rem;
      border-radius: 4px;
    }

    .marginclass{
      margin: 0px 20px;
    }
  </style>
  <div class="container-scroller">
    <?php include "../extra/_navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <?php include "../extra/_settings-panel.php";?>
      <?php include "../extra/_sidebar.php";?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Service Registration Form</h4>
                  <form class="form-sample" id="myForm" name="myForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Inward Letter No.</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="true" id="inwardletterno" name="inwardletterno" required value="<?php echo $data["transServiceInwardLetterNo"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Inward Letter Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" disabled="true" id="inwardletterdate" name="inwardletterdate" required  value="<?php echo $data["transdServiceInwardletterDate"]; ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Recieved From</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="true" id="recievedfrom" name="recievedfrom" required value="<?php echo $data["transdReceivedFrom"]; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Type</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="true" id="servicestype" name="servicestype" required value="<?php echo $data["transServiceId"]["vName"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply Letter No</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" disabled="true" id="replyletterno" name="replyletterno" required value="<?php echo $data["transdReplyToLetterNo"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply Letter Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" disabled="true" id="replyletterdate" name="replyletterdate" required  value="<?php echo $data["transdReplyToLetterDate"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" disabled="true" id="subject" name="subject" required value="<?php echo $data["transdSubject"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Receipt</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" disabled="true" id="dateofreceipt" name="dateofreceipt" required value="<?php echo $data["transdReceiptDate"]; ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" disabled="true" id="replyno" name="replyno" required  value="<?php echo $data["transdReplyNo"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" disabled="true" id="replydate" name="replydate" required value="<?php echo $data["transdReplyDate"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <?php 
                        if($sessiondata["isHod"] == "0")
                        {
                      ?>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Remarks</label>
                              <div class="col-sm-9">
                                <textarea rows="5" class="textclass" disabled="true" cols="53" id="remark" name="remark"><?php echo $data["transdRemarks"]; ?></textarea>
                              </div>
                            </div>
                          </div>
                      <?php
                        }
                        else
                        {
                      ?>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Remarks</label>
                              <div class="col-sm-9">
                                <textarea rows="5" class="textclass" cols="53" id="remark" name="remark"><?php echo $data["transdRemarks"]; ?></textarea>
                              </div>
                            </div>
                          </div>
                      <?php
                        }
                        if($sessiondata["isHod"])
                        {
                      ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" id="sendforapproval" class="form-check-input"> You Want to send to SuperAdmin for Approval?
                            <i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div>
                      <?php
                        }
                      ?>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="text-align: center;">
                        <?php
                          if($sessiondata["isHod"])
                          {
                        ?>
                            <input type="button" class="btn btn-primary marginclass" onclick="approveService(2)" value="Approve">
                            <input type="button" class="btn btn-danger marginclass" onclick="declineService(3)" value="Decline">
                        <?php  
                          }
                        ?>
                        <a class="btn btn-secondary" href="services_list.php">Cancel</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../extra/bottom_footer.php";?>
</body>
</html>

<script>
  var id = "<?php echo $primary_key; ?>";
  var method = 'POST';
  var query = '';
  if (id != '') {
    method = 'PUT';
    query = '?id='+id;
  }

  function approveService(id)
  {
    if(document.getElementById('sendforapproval').checked)
    {
      var payload = {
        "transdRemarks":document.getElementById('remark').value,
        "transApprovedUser":2,
        "transApprovedStatus":id,
        "transStatus":1
      };
    }
    else
    {
      var payload = {
        "transdRemarks":document.getElementById('remark').value,
        "transApprovedStatus":id,
        "transStatus":1
      };
    }

    $.ajax({
      type: method,
      url: '<?php echo "http://localhost/fms/backend/api/transcation/approve_services.php"?>'+query,
      data: JSON.stringify(payload),
      processData: false,
      contentType: false,
      success: function (responseDatas) 
      {
        var responseData = JSON.parse(responseDatas);
        if(responseData.flag) {
          alertify.success(responseData.message);
          setTimeout(function(){
            window.location.href='services_list.php';
          }, 2000);
        } else {
          alertify.error(responseData.message);
        }     
      }
    });
  }

  function declineService(id)
  {
    if(document.getElementById('sendforapproval').checked)
    {
      var payload = {
        "transdRemarks":document.getElementById('remark').value,
        "transApprovedUser":2,
        "transApprovedStatus":id,
        "transStatus":1
      };
    }
    else
    {
      var payload = {
        "transdRemarks":document.getElementById('remark').value,
        "transApprovedStatus":id,
        "transStatus":1
      };
    }

    if (document.getElementById('remark').value == "") {
      alertify.error("Enter Remark.");
      document.getElementById('replydate').focus();
      return false;
    }


    $.ajax({
      type: method,
      url: '<?php echo "http://localhost/fms/backend/api/transcation/decline_services.php"?>'+query,
      data: JSON.stringify(payload),
      processData: false,
      contentType: false,
      success: function (responseDatas) 
      {
        var responseData = JSON.parse(responseDatas);
        if(responseData.flag) {
          alertify.success(responseData.message);
          setTimeout(function(){
            window.location.href='services_list.php';
          }, 2000);
        } else {
          alertify.error(responseData.message);
        }     
      }
  });
  }
</script>
