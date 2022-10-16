<?php
  include "../../backend/api_function.php";
  include "../../backend/api/config_transcation.php";
  $page_title = "Services List";
  $sessiondata = getSessionData();
  
  if ($sessiondata['level'] == "1") {
    $action_services_data = $api_url.'transcation/services_list.php?admin='.$sessiondata["userid"];
    $data_servies_data = json_decode(file_get_contents($action_services_data),true);
  } else if($sessiondata['isHod'] == "1") {
    $action_services_data = $api_url.'transcation/services_list.php?hod='.$sessiondata["userid"];
    $data_servies_data = json_decode(file_get_contents($action_services_data),true);
  } else {
    $action_services_data = $api_url.'transcation/services_list.php?user='.$sessiondata["userid"];
    $data_servies_data = json_decode(file_get_contents($action_services_data),true);
  }  
?>
<?php include "../extra/top_header.php";?>
<style>
  .card-innerbody{
    display: flex;
    justify-content: space-between;
  }

  .odd{
        height: 50px !important;
    background: #eee;
  }

  .even{
        height: 50px;
    background: #b4d6d3;
  }
</style>
<body>
  <div class="container-scroller">
    <?php include "../extra/_navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <?php include "../extra/_settings-panel.php";?>
      <?php include "../extra/_sidebar.php";?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-innerbody">
                    <h4 class="card-title">Services Registration List</h4>
                    <?php
                      if($sessiondata['isHod'] == "0")
                      {
                    ?>
                        <a class="btn btn-outline-secondary btn-icon" href="services_form.php">
                          <i class="mdi mdi-plus text-danger"></i>
                        </a>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="services_list">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Inward Letter No
                          </th>
                          <th>
                            Received From
                          </th>
                          <th>
                            Service Type
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($data_servies_data['rows'] as $key=>$value)
                          {
                        ?>
                            <tr>
                              <td>
                                <?php echo $key+1;?>
                              </td>
                              <td>
                                <?php echo $value['transServiceInwardLetterNo'];?>
                              </td>
                              <td>
                                <?php echo $value['transdReceivedFrom'];?>
                              </td>
                              <td>
                                <?php echo $value['transServiceId']['vName'];?>
                              </td>
                              <td>
                                <?php echo ($value['transApprovedStatus'] == "") ? "Saved":$value['transApprovedStatus']['vName'];?>
                              </td>
                              <?php
                                if($sessiondata['isHod'] == "0")
                                {
                                  if(in_array($value['transApprovedStatus']['iId'], $edit_array))
                                  {
                              ?>
                                    <td>
                                      <a href="services_form.php?id=<?php echo $value['id'];?>">Edit</a>
                                    </td>
                              <?php
                                  }
                                  else
                                  {
                              ?>
                                    <td>
                                      <a href="services_form_view.php?id=<?php echo $value['id'];?>">View</a>
                                    </td>
                              <?php
                                  }
                                }
                                else
                                {
                              ?>
                                  <td>
                                    <a href="services_form_view.php?id=<?php echo $value['id'];?>">View</a>
                                  </td>
                              <?php
                                }
                              ?>
                            </tr>
                        <?php 
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../extra/bottom_footer.php";?>
  <script src="<?php echo $site_url;?>/vendors/datatable/datatable.js"></script>
</body>
</html>
<script type="text/javascript">
  $(function() {
    $('#services_list').DataTable();
  });
</script>

