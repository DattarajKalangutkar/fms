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
//    DFA($data);
  }
  
?>
<?php include "../extra/top_header.php";?>
<body>
  <style type="text/css">
    .textclass{
      opacity: 1;
      border: 1px solid #dee2e6;
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
                            <input type="text" class="form-control" id="inwardletterno" name="inwardletterno" required value="<?php echo $data["transServiceInwardLetterNo"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Inward Letter Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" id="inwardletterdate" name="inwardletterdate" required  value="<?php echo $data["transdServiceInwardletterDate"]; ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Recieved From</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="recievedfrom" name="recievedfrom" required value="<?php echo $data["transdReceivedFrom"]; ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Type</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-single w-100" id="servicestype" name="servicestype" >
                              <option value="0">Select the Type</option>
                              <?php
                                  $selected = '';
                                foreach($data_servies_type['rows'] as $key=>$value)
                                {
                               if ($data["transServiceId"]["iId"] == $value["id"]) {
                                  $selected = 'selected';
                               }   
                              ?>
                                  <option value="<?php echo $value['id'];?>" <?php echo $selected; ?>><?php echo $value['serviceTypeName'];?></option>
                              <?php
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply Letter No</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="replyletterno" name="replyletterno" required value="<?php echo $data["transdReplyToLetterNo"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply Letter Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" id="replyletterdate" name="replyletterdate" required  value="<?php echo $data["transdReplyToLetterDate"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Subject</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="subject" name="subject" required value="<?php echo $data["transdSubject"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Receipt</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" id="dateofreceipt" name="dateofreceipt" required value="<?php echo $data["transdReceiptDate"]; ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="replyno" name="replyno" required  value="<?php echo $data["transdReplyNo"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Reply Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" id="replydate" name="replydate" required value="<?php echo $data["transdReplyDate"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Remarks</label>
                          <div class="col-sm-9">
                            <textarea rows="5" class="textclass" cols="53" id="remark" name="remark"><?php echo $data["transdRemarks"]; ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="text-align: center;">
                        <input type="button" class="btn btn-primary marginclass" onclick="validate(0)" value="Save">
                        <input type="button" class="btn btn-danger marginclass" onclick="validate(1)" value="Complete">
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
  function validate(statusId)
  {
    if (document.getElementById('inwardletterno').value == "") {
      alertify.error("Enter Inward Letter No.");
      document.getElementById('inwardletterno').focus();
      return false;
    }

    if (document.getElementById('inwardletterdate').value == "") {
      alertify.error("Enter Inward Letter Date.");
      document.getElementById('inwardletterdate').focus();
      return false;
    }

    if (document.getElementById('recievedfrom').value == "") {
      alertify.error("Enter Received From.");
      document.getElementById('recievedfrom').focus();
      return false;
    }

    if (document.getElementById('servicestype').value == "") {
      alertify.error("Select Service Registration Type");
      document.getElementById('servicestype').focus();
      return false;
    }

    if (document.getElementById('replyletterno').value == "") {
      alertify.error("Enter Reply Letter No.");
      document.getElementById('replyletterno').focus();
      return false;
    }

    if (document.getElementById('replyletterdate').value == "") {
      alertify.error("Enter Reply Letter Date.");
      document.getElementById('replyletterdate').focus();
      return false;
    }


    if (document.getElementById('dateofreceipt').value == "") {
      alertify.error("Enter Receipt Date.");
      document.getElementById('dateofreceipt').focus();
      return false;
    }

    if (document.getElementById('replyno').value == "") {
      alertify.error("Enter Reply No.");
      document.getElementById('replyno').focus();
      return false;
    }

    if (document.getElementById('replydate').value == "") {
      alertify.error("Enter Reply Date.");
      document.getElementById('replydate').focus();
      return false;
    }

    var payload = {
      "transServiceNo":"00003",
      "transServiceInwardLetterNo" : document.getElementById('inwardletterno').value,
      "transdServiceInwardletterDate":moment(document.getElementById('inwardletterdate').value).format("YYYY-MM-DD"),
      "transdReceivedFrom":document.getElementById('recievedfrom').value,
      "transServiceId":document.getElementById('servicestype').value,
      "transdReplyToLetterNo":document.getElementById('replyletterno').value,
      "transdReplyToLetterDate":moment(document.getElementById('replyletterdate').value).format("YYYY-MM-DD"),
      "transdReceiptDate":moment(document.getElementById('dateofreceipt').value).format("YYYY-MM-DD"),
      "transdReplyNo":document.getElementById('replyno').value,
      "transdReplyDate":moment(document.getElementById('replydate').value).format("YYYY-MM-DD"),
      "transdRemarks":document.getElementById('remark').value,
      "transCreated":'<?php echo $sessiondata["userid"]; ?>',
      "transdSubject":document.getElementById('subject').value,
      "transdEntryDate":moment(new Date()).format("YYYY-MM-DD"),
      "transApprovedUser":"<?php echo $sessiondata["Hod"]['iId']; ?>",
      "transApprovedStatus":statusId,
      "transStatus":1
    };
  
    $.ajax({
        type: method,
        url: '<?php echo "http://localhost/fms/backend/api/transcation/services_form.php"?>'+query,
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
