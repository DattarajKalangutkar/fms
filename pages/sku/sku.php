<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "SKU Create ";

?>
<?php include "../../extra/top_header.php"; ?>
<style>
  .form-check .form-check-label {
    min-height: 18px;
    display: block;
    margin-left: 1.75rem;
    font-size: 0.812rem;
    line-height: 1.5;
    margin-right: 1.75rem;
  }
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
                    <h4 class="card-title">Sku Details</h4>

                  </div>

                  <form>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                          Active
                          <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                          Inactive
                          <i class="input-helper"></i></label>
                      </div>

                    </div>
                    <div class="row">

                      <div class="input-containers form-group col-3">
                        <input type="text" name="sku_id" class="input form-control" id="sku_id">
                        <label for="">SKU ID</label>
                        <span>SKU ID</span>
                      </div>
                      <div class=" input-containers form-group col-3">
                        <input type="text" name="purchase_name" class="input form-control" id="sku_id"> 
                        <label for="">Purchase Name</label>
                        <span>Purchase Name</span>
                      </div>
                      <div class=" input-containers form-group col-3">
                        <input type="text" name="sale_name" class="input form-control" id="sku_id"> 
                        <label for="">Sale Name</label>
                        <span>Sale Name</span>
                      </div>

                      <div class="input-containers  form-group col-3">
                        <input type="text" name="purchased_price" class="input form-control" id="sku_id"> 
                        <label for="">Purchased Price per unit</label>
                        <span>Purchased Price per unit</span>
                      </div>

                      <div class="input-containers form-group col-3">
                        <input type="text" name="selling_price" class="input form-control" id="sku_id"> 
                        <label for="">Selling Price Per Unit</label>
                        <span>Selling Price Per Unit</span>
                      </div>

                      <div class=" form-group col-3">
                        <select name="tags" class="form-control js-example-basic-single w-100" id="tags">
                          <option value="">Select and Select tags</option>
                          <option value="mayur">Admin</option>
                          <option value="mayur">User</option>
                        </select>
                      </div>

                      <div class="form-group col-3">
                        <select name="unit_measurement" class="form-control js-example-basic-single w-100" id="unit_measurement">
                          <option value="">Unit of measurement</option>
                          <option value="mayur">Admin</option>
                          <option value="mayur">User</option>
                        </select>
                      </div>

                    </div>

                    <div class="form-group col-3">
                      <h5>File</h5>
                      <div class="file-upload-wrapper">
                        <div id="fileuploader">
                          <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                            <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload
                              <form method="POST" action="YOUR_FILE_UPLOAD_URL" enctype="multipart/form-data" style="margin: 0px; padding: 0px;">
                                <input type="file" id="ajax-upload-id-1666784081485" name="myfile[]" accept="*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;">
                              </form>
                            </div><span><b style="margin-left: 12px;">Drag &amp; Drop Files</b></span>
                          </div>
                          <div></div>
                        </div>
                        <div class="ajax-file-upload-container"></div>

                      </div>
                      <input type="button" class="btn btn-primary marginclass" onclick="getData(); return false;" id="save_btn" value="Submit">

                    </div>

                  </form>


                </div>
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