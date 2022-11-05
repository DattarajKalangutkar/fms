<?php
  include "../../frontend_config.php";
  include "../../frontend_function.php";
  $page_title = "Add Organisation";
  $primary_key = (isset($_GET['id'])) ? $_GET['id']:'';
  $data = [];
  $data["organisation_name"] = '';
  $data["organisation_username"] = '';
  $data["employee_name"] = '';
  $data["employee_phone"] = '';
  $data["userid"] = '';

  if($primary_key != '')
  {
    $data = datajson_to_array($backend_links['api_url']."superadmin/organisation.php?id=".$primary_key);
  }
?>
<?php include "../../extra/top_header.php";?>
<body>
  <style type="text/css">
    .textclass{
      opacity: 1;
      border: 1px solid #dee2e6;
      font-weight: 400;
      font-size: 0.875rem;
      border-radius: 4px;
      width: 100%;
    }

    .marginclass{
      margin: 0px 20px;
    }
  </style>
  <div class="container-scroller">
    <?php include "../../extra/_navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <?php include "../../extra/_settings-panel.php";?>
      <?php include "../../extra/_sidebar.php";?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Organisation</h4>
                  <form class="form-sample" id="myForm" name="myForm" action="saveorganisation.php" method="POST">
                    <input type="hidden" name="userid" id="userid" value="<?php echo $data["userid"];?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="organisation_name" name="organisation_name" required value="<?php echo $data["organisation_name"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="organisation_username" name="organisation_username" required value="<?php echo $data["organisation_username"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4 class="card-title">Add Employee</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_name" name="employee_name" required value="<?php echo $data["employee_name"]; ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Phone</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="employee_phone" name="employee_phone" required value="<?php echo $data["employee_phone"]; ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="text-align: center;">
                        <input type="button" class="btn btn-primary marginclass" onclick="validate()" value="Save">
                        <a class="btn btn-secondary" href="list.php">Cancel</a>
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
  <?php include "../../extra/bottom_footer.php";?>
</body>
</html>
<script type="text/javascript">
var id = "<?php echo $primary_key; ?>";
var method = 'POST';
var query = '';
if (id != '') {
  method = 'PUT';
  query = '?id='+id;
}


function validate()
{
  var payload = {
    "organisation_name" : document.getElementById('organisation_name').value,
    "organisation_username":document.getElementById('organisation_username').value,
    "employee_name":document.getElementById('employee_name').value,
    "employee_phone":document.getElementById('employee_phone').value,
    "userid":document.getElementById('userid').value,
  };

  $.ajax({
    type: method,
    url: '<?php echo $backend_links["api_url"]."superadmin/organisation.php";?>'+query,
    data: JSON.stringify(payload),
    success: function (responseDatas) 
    {
      var responseData = JSON.parse(responseDatas);
      if(responseData.flag) {
        alertify.success(responseData.message);
        setTimeout(function(){
          window.location.href='list.php';
        }, 2000);
      } else {
        alertify.error(responseData.message);
      }     
    }
  });
}
</script>
