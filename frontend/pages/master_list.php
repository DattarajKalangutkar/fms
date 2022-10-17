<?php
  include "../../backend/api_function.php";
  include "../../backend/html_function.php";
  include "../../backend/api/config_master.php";
  $page_title = "Master List";
  $sessiondata = getSessionData();
  if(!isset($sessiondata['userData']))
  {
    header("location:index.php");
    exit;
  }

  $tech = ($_GET['type']) ? $_GET['type']:'Dashboard';  
  $title = ($_GET['type']) ? ucwords($_GET['type']):'Dashboard';  
  $action = $api_url.'master/master.php?modules='.$tech;  
  $data = json_decode(file_get_contents($action),true);
  $get_data_table_str = getDataTable($master_config[$tech],$data['rows'],$tech,'edit',$con);

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
                    <h4 class="card-title">Master List : <?php echo $title;?></h4>
                    <a class="btn btn-outline-secondary btn-icon" href="master_add.php?type=<?php echo $tech;?>">
                      <i class="mdi mdi-plus text-danger"></i>
                    </a>
                  </div>
                  <?php echo $get_data_table_str;?>
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
    $('#master_list').DataTable();
  });
</script>

