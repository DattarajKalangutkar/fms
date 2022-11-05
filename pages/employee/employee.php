<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Employee ";

?>
<?php include "../../extra/top_header.php"; ?>
<style>

</style>

<body>
  <div class="container-scroller">
    <?php include "../../extra/_navbar.php"; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include "../../extra/_settings-panel.php"; ?>
      <?php include "../../extra/_sidebar.php"; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-innerbody">
                    <h4 class="card-title">Create Employee </h4>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h5>Personal Details</h5>
                    </div>
                    <div class=" form-group col-6">
                      <h5>Employment Info</h5>
                    </div>
                    <form method="post">
                      <div class="row">
                        <div class="input-containers form-group col-3">
                          <input type="text" name="username" class="input form-control" id="exampleInputUsername1">
                          <label for="">Username</label>
                          <span>Username</span>
                        </div>
                        <div class="form-group col-3">
                        </div>
                        <div class="input-containers form-group col-3">
                          <input type="text" name="employee_id" class="input form-control" id="exampleInputUsername1">
                          <label for="">Employee ID</label>
                          <span>Employee ID</span>
                        </div>
                        <div class="input-containers focus form-group col-3">
                          <input type="date" name="date_of_joining" class=" form-control" id="exampleInputUsername1" value="10-10-22">
                          <label for="">Date of Join</label>
                          <span>Date of Join</span>
                        </div>
                        <br>
                        <br>
                        <div class="input-containers form-group  col-3">
                          <input type="text" class="input form-control" name="input first_name" id="exampleInputUsername1">
                          <label for="">First name</label>
                          <span>First name</span>
                        </div>
                        <div class="input-containers form-group col-3">
                          <input type="text" class="input form-control" name="input last_name" id="exampleInputUsername1">
                          <label for="">Last name</label>
                          <span>Last name</span>
                        </div>
                        <div class=" form-group col-3">
                          <select name="salary_format" class="form-control js-example-basic-single w-100" id="salary_format">
                            <option value="">Select salary currency format</option>
                            <option value="mayur">INR</option>
                          </select>
                        </div>
                        <div class="input-containers  form-group col-3">
                          <input type="text" class="input form-control" id="exampleInputUsername1">
                          <label for="">Salary</label>
                          <span>Salary</span>
                        </div>
                        <br>
                        <br>
                        <div class="form-group col-3">
                          <select name="country_code" class="form-control js-example-basic-single w-100" id="country_code">
                            <option value="">Select Country code</option>
                            <option value="mayur">Mayur</option>
                            <option value="mayur">Mayur</option>
                            <option value="test">Test</option>
                          </select>
                        </div>
                        <div class="input-containers focus form-group col-3">
                          <input type="date" class=" form-control" id="exampleInputUsername1">
                          <label for="">Birthday</label>
                          <span>Birthday</span>
                        </div>
                        <div class="input-containers form-group col-3">
                          <input type="text" class="input form-control" id="exampleInputUsername1">
                          <label for="">Contractual rates (rate/hour)</label>
                          <span>Contractual rates (rate/hour)</span>
                        </div>
                        <div class="form-group col-3">
                        </div>
                        <div class="input-containers form-group col-6">
                          <label>&nbsp;</label>
                          <textarea rows="4" cols="34" class="input form-control" aria-invalid="false" id="outlined-name" style="height: 57px;"></textarea>
                          <label for="">Address</label>
                          <span>Address</span>
                        </div>
                        <br>
                        <br>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                          Designation & Access
                        </div>
                        <div class=" form-group col-6">
                          Yard Tagging
                        </div>
                        <div class="input-containers form-group col-3">
                          <input type="text" class="input form-control" id="exampleInputUsername1">
                          <label for="">Designation</label>
                          <span>Designation</span>
                        </div>
                        <div class="form-group col-3">
                          <select name="role" class="form-control js-example-basic-single w-100" id="role">
                            <option value="">Select Role</option>
                            <option value="mayur">Admin</option>
                            <option value="mayur">User</option>
                            <option value="test">Test</option>
                          </select>
                        </div>
                        <div class="form-groups col-6">
                        
                          <p><i class="mdi mdi-information mdi-16px" aria-hidden="true"></i>
                            No yard is tagged to this employee. Please tag employee from yard form.</p>
                        </div>
                        <div class="col-3">
                          <select name="tag_customer" class="form-control js-example-basic-single w-100" id="tag_customer">
                            <option value="">Select Country code</option>
                            <option value="mayur">Mayur</option>
                            <option value="mayur">Mayur</option>
                            <option value="test">Test</option>
                          </select>
                        </div>
                        <div class="form-group col-3">
                        
                          <div class="switch">
                            <label>
                              <input type="checkbox" checked="checked">
                              <span class="lever"></span>Tick to make Supervisor
                            </label>
                          </div>
                        </div>
                        <div class="form-group col-12">
                          <h5>File</h5>
                          <div class="file-upload-wrapper">
                            <div id="fileuploader">
                              <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                                <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload
                                  <form method="POST" action="YOUR_FILE_UPLOAD_URL" enctype="multipart/form-data" style="margin: 0px; padding: 0px;">
                                    <input type="file" id="ajax-upload-id-1666784081485" name="myfile[]" accept="*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;">
                                  </form>
                                </div><span><b>Drag &amp; Drop Files</b></span>
                              </div>
                              <div></div>
                            </div>
                            <div class="ajax-file-upload-container"></div>
                          </div>
                          <input type="button" class="btn btn-primary marginclass" onclick="getData(); return false;" id="save_btn" value="Submit">
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="creater">
                  <span>Created By: Yatin Kanekar</span>
                  <span>Created on: 25 October 2022, 13:29:51</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "../../extra/bottom_footer.php"; ?>
    <script src="<?php echo $site_url; ?>/vendors/datatable/datatable.js"></script>
</body>

</html>
<script type="text/javascript">
  $(function() {
    $('#master_list').DataTable();
  });
</script>