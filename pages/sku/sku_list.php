<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "SKU List";

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
                                            <h4 class="card-title">SKU List :</h4>
                                        </div>
                                        <div>
                                            <a href="sku.php">
                                                <input type="button" class="btn btn-primary custom_btn_resize child btn-width" value="+ CREATE SKU">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <table id="sku-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                             <thead>
                                                <tr>
                                                   <th>
                                                      SKU ID
                                                   </th>
                                                   <th>
                                                   SKU Purchase Name
                                                   </th>
                                                   <th>
                                                      SKU Sale Name                                                   </th>
                                                   <th>
                                                      Purchase Price Per Unit
                                                   </th>
                                                   <th>
                                                      Sale Price Per Unit
                                                   </th>
                                                   <th>
                                                       Units
                                                   </th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr class="odd">
                                                   <td>
                                                      1
                                                   </td>
                                                   <td>
                                                   Copper Grade 2 P
                                                   </td>
                                                   <td>
                                                   Copper grade 2 S
                                                   </td>
                                                   <td>
                                                   ZAR 3	
                                                   </td>
                                                   <td>
                                                   ZAR 5	
                                                   </td>

                                                   <td>
                                                  0
                                                   </td>
                                                </tr>
                                                <tr class="odd">
                                                   <td>
                                                      2
                                                   </td>
                                                   <td>
                                                   Copper Grade 2 P
                                                   </td>
                                                   <td>
                                                   Copper grade 2 S
                                                   </td>
                                                   <td>
                                                   ZAR 3	
                                                   </td>
                                                   <td>
                                                   ZAR 5	
                                                   </td>

                                                   <td>
                                                  0
                                                   </td>
                                                </tr>
                                                <tr class="odd">
                                                   <td>
                                                      3  
                                                   </td>
                                                   <td>
                                                   Copper Grade 2 P
                                                   </td>
                                                   <td>
                                                   Copper grade 2 S
                                                   </td>
                                                   <td>
                                                   ZAR 3	
                                                   </td>
                                                   <td>
                                                   ZAR 5	
                                                   </td>

                                                   <td>
                                                  0
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
        $('#sku-listing').DataTable({
            responsive: true
        });
    });
</script>