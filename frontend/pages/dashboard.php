<?php
  include "../../backend/api_function.php";
  include "../../backend/api/config_transcation.php";

    
  $sessiondata = getSessionData();
 //vUsername
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

      </div>
    </div>
  </div>
  <?php include "../extra/bottom_footer.php";?>
</body>
</html>
<script type="text/javascript">
  console.log(JSON.parse(sessionStorage.getItem('userData')));
</script>
