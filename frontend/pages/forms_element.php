<?php
  include "../../backend/api_function.php";
  include "../../backend/api/config_transcation.php";
  $sessiondata = getSessionData();
  $action_services_type = $api_url.'master/master.php?modules=services_types';
  $data_servies_type = json_decode(file_get_contents($action_services_type),true);

  $primary_key = (isset($_GET['id'])) ? $_GET['id']:'';
  $data = [];
  if($primary_key != '')
  {
    $action = $api_url."transcation/services_list.php";
    $action .= '?id='.$primary_key;
    echo $action;
    $data = json_decode(file_get_contents($action),true);
    $data = $data['rows'];
    //DFA($data);
  }
  
?>
<?php include "../extra/top_header.php";?>
<body>
  
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
                  <h4 class="card-title">Service Registeration Form</h4>
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
                          <label class="col-sm-3 col-form-label">Service Registeration Type</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-single w-100" id="servicestype" name="servicestype" value="<?php echo $data["transServiceId"]; ?>">
                              <option value="0">Select the Type</option>
                              <?php
                                foreach($data_servies_type['rows'] as $key=>$value)
                                {
                              ?>
                                  <option value="<?php echo $value['id'];?>"><?php echo $value['serviceTypeName'];?></option>
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
                              <input type="text" class="form-control" id="subject" name="subject" required  />
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
                            <textarea class="form-control" id="remark" name="remark" value="<?php echo $data["transdRemarks"]; ?>"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="mt-3">
                        <input type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="validate()" value="Save">
                        <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" href="basic-table.php">CANCEL</a>
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
  function validate()
  {
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
    "transdEntryDate":moment(new Date()).format("YYYY-MM-DD"),
    "transApprovedUser":"2",
    "transApprovedStatus":"1",
    "transStatus":1
  };
    
    
  $.ajax({
      type: "POST",
      url: '<?php echo "http://localhost/fms/backend/api/transcation/services_form.php"?>',
      data: JSON.stringify(payload),
      processData: false,
      contentType: false,
      success: function (responseDatas) 
      {
        var responseData = JSON.parse(responseDatas);
        if(responseData.error) {
          alertify.error(responseData.message);
        } else {
          console.log(responseData);
          window.location.href='basic-table.php';
        }        
      }
  });

}
</script>
