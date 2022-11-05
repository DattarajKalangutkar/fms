<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Role List";

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
                                            <h4 class="card-title">Stackholder List :</h4>
                                        </div>
                                        <div>
                                            <a href="stakeholder.php">
                                                <input type="button" class="btn btn-primary custom_btn_resize child btn-width" value="+ CREATE STACKHOLDER">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <table id="role-listing" class="table ">
                                             <thead>
                                                <tr>
                                                   <th>
                                                   Type
                                                   </th>
                                                   <th>
                                                      Stakeholder Code 
                                                   </th>
                                                   <th>
                                                   Stakeholder Name 

                                                   </th>
                                                   <th>
                                                      Phone
                                                   </th>
                                                   <th>
                                                      Email
                                                   </th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr >
                                                   <td>
                                                   Shipping Agent
                                                   </td>
                                                   <td>
                                                   AB101
                                                   </td>
                                                   <td>
                                                   AKSHAYA (AK). Name,free
                                                   </td>
                                                   <td>
                                                   +91 9877665544
                                                   </td>
                                                   <td>
                                                   AK47@GMAIL.COM
                                                   </td>
                                                </tr>
                                                <tr >
                                                <td>
                                                Customer (Supplier)
                                                   </td>
                                                   <td>
                                                   AB167
                                                   </td>
                                                   <td>
                                                   AKSHAYA (AK). Name,free
                                                   </td>
                                                   <td>
                                                   +91 9877665544
                                                   </td>
                                                   <td>
                                                   AK47@GMAIL.COM
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