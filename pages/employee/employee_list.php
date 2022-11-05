<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Employee List";

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
                              <div>
                                 <h4 class="card-title">Employee List :</h4>
                              </div>
                              <div>
                                 <a href="employee.php" >
                                    <input type="button" class="btn btn-primary custom_btn_resize child " value="+ CREATE EMPLOYEE">

                                 </a>
                              </div>
                           </div>


                           <div class="row">
                              <div class="col-lg-12">


                                 <table id="employee-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                    <thead>
                                       <tr>

                                          <th>
                                             First name
                                          </th>
                                          <th>
                                             Last Name
                                          </th>
                                          <th>
                                             Phone Number
                                          </th>
                                          <th>
                                             Email
                                          </th>
                                          <th>
                                             Role
                                          </th>
                                          <th>
                                             Designation
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="odd">
                                          <td>Ashish</td>
                                          <td>Sirohi</td>
                                          <td>9876554433</td>
                                          <td>ashish@afroindia.com</td>
                                          <td>Admin</td>
                                          <td>Owner</td>

                                       </tr>
                                       <tr class="odd">
                                          <td>Ashish</td>
                                          <td>Sirohi</td>
                                          <td>9876554433</td>
                                          <td>ashish@afroindia.com</td>
                                          <td>Admin</td>
                                          <td>Owner</td>

                                       </tr>
                                       <tr class="odd">
                                          <td>Ashish</td>
                                          <td>Sirohi</td>
                                          <td>9876554433</td>
                                          <td>ashish@afroindia.com</td>
                                          <td>Admin</td>
                                          <td>Owner</td>

                                       </tr>
                                       <tr class="odd">
                                          <td>Ashish</td>
                                          <td>Sirohi</td>
                                          <td>9876554433</td>
                                          <td>ashish@afroindia.com</td>
                                          <td>Admin</td>
                                          <td>Owner</td>

                                       </tr>


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
   </div>
   <?php include "../../extra/bottom_footer.php"; ?>

</body>


</html>
<script type="text/javascript">
   $(function() {
      $('#employee-listing').DataTable();
   });
</script>