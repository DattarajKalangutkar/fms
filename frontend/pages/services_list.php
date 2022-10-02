<?php
  include "../../backend/api_function.php";
  include "../../backend/api/config_transcation.php";
  $page_title = "Services List";
  $sessiondata = getSessionData();
  $action_services_data = $api_url.'transcation/services_list.php?user='.$sessiondata["userid"];
  $data_servies_data = json_decode(file_get_contents($action_services_data),true);
?>
<?php include "../extra/top_header.php";?>
<style>
  .card-innerbody{
    display: flex;
    justify-content: space-between;
  }

  .button-add{
    padding: 6px 20px;
    color: black;
    background: #eee;
    text-decoration: none;
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
                    <a class="button-add" href="services_form.php">+</a>
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
                                <a href="services_form.php?id=<?php echo $value['id'];?>">Edit</a>
                              </td>
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
    $('#services_list').DataTable({
      "iDisplayLength": 10,
    });
  });
</script>

