<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Role";
?>
<?php include "../../extra/top_header.php"; ?>
<style>
  .card-innerbody {
    display: flex;
    justify-content: space-between;
  }

  .odd {
    height: 50px !important;
    background: #eee;
  }

  .even {
    height: 50px;
    background: #b4d6d3;
  }

  .form-check {
    position: relative;
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-left: 0;
  }

  .table,
  .table td {
    text-align: center;
    line-height: 1;
    white-space: nowrap;
    padding: 0rem 0rem;
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
                    <h4 class="card-title">Role :</h4>

                  </div>

                  <div class="row">
                    <div class="input-containers col-4">

                      <input type="text" class="input form-control" id="exampleInputUsername1">
                      <label for="">Enter Role Name</label>
                      <span>Enter Role Name</span>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Modules</th>
                          <th>Read</th>
                          <th>Create</th>
                          <th>Update</th>
                          <th>Delete</th>
                          <th>Menu</th>
                          <th>Tabs</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Purchase</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <i class="mdi mdi-window-close mdi-24px" aria-hidden="true" style="    margin-left: -8px;"></i>

                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                T1
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T2
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T3
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T4
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T5
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>

                        </tr>
                        <tr>
                          <td>Local sales</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                T1
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T2
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T3
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T4
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                T5
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>


                        </tr>
                        <tr>
                          <td>Exportsales Contract </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Exportsales bookings</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>


                        </tr>
                        <tr>
                          <td>Inventory</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>


                        </tr>
                        <tr>
                          <td>Vehicle</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>


                        </tr>
                        <tr>
                          <td>Organization</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Skus</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Sites</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>


                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Sales</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Documents</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Client-auth </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Roles</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Master-configs</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Containers</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Reports </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Stats</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>

                        </tr>
                        <tr>
                          <td>Tally-integrations </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>
                        </tr>
                        <tr>
                          <td>Users</td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked="">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">

                                <i class="input-helper"></i></label>
                            </div>
                          </td>
                          <td>--</td>
                        </tr>

                      </tbody>
                    </table>


                  </div>
                  <div style="text-align: right;">
                    <input type="button" class="btn-inverse-dark custom_btn secondary" id="reset" value="Reset">
                    <input type="button" class="btn-inverse-dark custom_btn secondary" id="clear" value="Clear">
                    <input type="button" class="btn-inverse-dark custom_btn secondary" id="Save" value="Save">
                  </div>
                </div>
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