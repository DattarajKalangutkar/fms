<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Master";

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
                  <div class="card-innerbody p_20">
                     <div>
                        <h4 class="card-title font22 mt_10">Search Master</h4>
                        <p>Search by Master details</p>
                     </div>
                     <div class="col-md-7 card p_20">
                        <div class="account_field font20 p_10">
                           <select name="master_type" class="form-control js-example-basic-single w-100" id="master_type">
                              <option value="">Select Master Type</option>
                              <option value="bank_account">Bank Account Type</option>
                              <option value="cities">Cities</option>
                              <option value="countries">Countries</option>
                              <option value="country_code">Country Code</option>
                              <option value="container_type">Container Type</option>
                              <option value="currencies">Currencies</option>
                              <option value="documents">Documents</option>
                              <option value="empty_depot">Empty Depot</option>
                              <option value="full_depot">Full Depot</option>
                              <option value="payment_type">Payment Type</option>
                              <option value="ports">Ports</option>
                              <option value="ports_stacks">Ports stacks</option>
                              <option value="price_term">Price Terms</option>
                              <option value="units">units</option>
                              <option value="vechile_manufa">vechile Manufacturers</option>
                              <option value="vechile_models">vechile Models</option>
                              <option value="process">Process</option>
                              <option value="bins">BINS</option>
                           </select>
                        </div>
                        <div class="input-containers child2 focus">
                        </div>
                     </div>
                     <div >
                        <a href="index.php">
                           <!-- <a href="index.php" class="btn btn-primary custom_btn_resize child btn-width">+ CREATE MASTER</a> -->
                           <input type="button" class="btn btn-primary custom_btn_resize child" value="+ CREATE MASTER">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-12 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">


                           <div class="row">
                              <div class="col-lg-12">
                                 <table id="listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                    <thead>
                                       <tr>
                                          <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending">Code</th>
                                          <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Description</th>
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
                                       </tr>
                                       <tr class="even">
                                          <td class="sorting_1">
                                             2
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                       </tr>
                                       <tr class="odd">
                                          <td class="sorting_1">
                                             3
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                       </tr>
                                       <tr class="even">
                                          <td class="sorting_1">
                                             4
                                          </td>
                                          <td>
                                             YardSid
                                          </td>
                                       </tr>
                                       <tr class="odd">
                                          <td class="sorting_1">
                                             5
                                          </td>
                                          <td>
                                             YardSid
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
   </div>
   <?php include "../../extra/bottom_footer.php"; ?>

</body>


</html>
<script type="text/javascript">
   $(function() {
      $('#listing').DataTable();
   });
</script>