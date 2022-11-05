<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Yard List";

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
                                 <h4 class="card-title">Yard List :</h4>
                              </div>
                              <div>
                                 <a href="index.php" >
                                    <input type="button" class="btn btn-primary custom_btn_resize child " value="+ CREATE YARD">
                                 </a>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12">
                                 <table id="role-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                    <thead>
                                       <tr>
                                          <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" >#</th>
                                          <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Yard Name</th>
                                          <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Yard Code</th>
                                          <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">City</th>
                                          <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">Address</th>
                                          <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased Price: activate to sort column ascending">No of Scale</th>
                                          <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                                       </tr>
                                    </thead>
                                    <tbody>           
                                       <tr class="odd">
                                          <td class="sorting_1">
                                             1
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                          <td>
                                             45
                                          </td>
                                          <td>
                                             vasco
                                          </td>
                                          <td>
                                             Sancoale
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             <label class="badge badge-success">Active</label>
                                          </td>
                                       </tr>
                                       <tr class="even">
                                          <td class="sorting_1">
                                             2
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                          <td>
                                             45
                                          </td>
                                          <td>
                                             vasco
                                          </td>
                                          <td>
                                             Sancoale
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             <label class="badge badge-success">Active</label>
                                          </td>
                                       </tr>
                                       <tr class="odd">
                                          <td class="sorting_1">
                                             3
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                          <td>
                                             45
                                          </td>
                                          <td>
                                             vasco
                                          </td>
                                          <td>
                                             Sancoale
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             <label class="badge badge-success">Active</label>
                                          </td>
                                       </tr>
                                       <tr class="even">
                                          <td class="sorting_1">
                                             4
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                          <td>
                                             45
                                          </td>
                                          <td>
                                             vasco
                                          </td>
                                          <td>
                                             Sancoale
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             <label class="badge badge-success">Active</label>
                                          </td>
                                       </tr>
                                       <tr class="odd">
                                          <td class="sorting_1">
                                             5
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                          <td>
                                             45
                                          </td>
                                          <td>
                                             vasco
                                          </td>
                                          <td>
                                             Sancoale
                                          </td>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             <label class="badge badge-success">Active</label>
                                          </td>
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
      $('#role-listing').DataTable();
   });
</script>