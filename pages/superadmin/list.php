<?php
  include "../../frontend_config.php";
  include "../../frontend_function.php";
  $page_title = "SuperAdmin"; 
  $data = datajson_to_array($backend_links['api_url']."superadmin/organisation.php");
?>
<?php include "../../extra/top_header.php";?>
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
    <?php include "../../extra/_navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <?php include "../../extra/_settings-panel.php";?>
      <?php include "../../extra/_sidebar.php";?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-innerbody">
                    <h4 class="card-title">Organisation</h4>
                    <a class="btn btn-outline-secondary btn-icon" href="add_organisation.php">
                      <i class="mdi mdi-plus text-danger"></i>
                    </a>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="services_list">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if(count($data) > 0)
                          {
                            foreach($data as $key=>$value)
                            {
                        ?>    
                              <tr>
                                <td><?php echo ($key+1);?></td>
                                <td><?php echo $value['orgName'];?></td>
                                <td><a href="add_organisation.php?id=<?php echo $value['orgid'];?>">Edit</a>
                              </tr>
                        <?php
                            }
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
  <?php include "../../extra/bottom_footer.php";?>
  <script src="<?php echo $site_url;?>/vendors/datatable/datatable.js"></script>
</body>
</html>
<script type="text/javascript">
  $(function() {
    $('#services_list').DataTable();
  });
</script>

