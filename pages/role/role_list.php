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

    .table,
    .table, td{
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
                                        <h4 class="card-title">Role List :</h4>

                                       

                                        <div>
                                            <a href="role.php">
                                                <input type="button" class="btn btn-primary custom_btn_resize child btn-width" value="+ CREATE ROLE">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <table id="role-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead>
                                                    <tr>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 126.525px;">Role Name</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td>ADmin</td>
                                                        
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Users </td>
                                                        
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>ADmin</td>
                                                        
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
