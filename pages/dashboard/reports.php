<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Dashboard || Reports";

?>
<?php include "../../extra/top_header.php"; ?>

<body>
    <div class="container-scroller">
        <?php include "../../extra/_navbar.php"; ?>
        <div class="container-fluid page-body-wrapper">
            <?php include "../../extra/_settings-panel.php"; ?>
            <?php include "../../extra/_sidebar.php"; ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Reports </h3>
                                    <label for="">Reports section</label>
                                    <br>
                                    <form class="form-sample" id="myForm" name="myForm">
                                        <div class="row">
                                            <div class="form-group col-3 col-md-3">
                                                <select name="tag_customer" class="form-control js-example-basic-single w-100" id="module3">
                                                    <option value="">Report Name</option>
                                                    <option value="Acquisition Registe">Acquisition Register</option>
                                                    <option value="Purchase Day Book Register">Purchase Day Book Register</option>
                                                    <option value="Weight Difference Report">Weight Difference Report</option>

                                                    <option value="Purchase/Sales Count Report">Purchase/Sales Count Report</option>

                                                    <option value="Photo Scrutiny Report">Photo Scrutiny Report</option>

                                                </select>
                                            </div>

                                        </div>
                                        <br>
                                        <br>

                                        <h6>
                                            Search Criteria
                                        </h6>
                                        <div class="row">
                                            <div class="form-group col-3 col-md-3">
                                                <select name="tag_customer" class="form-control js-example-basic-single w-100" id="status">
                                                    <option value="">Tag Yard</option>
                                                    <option value="YardSid">YardSid</option>
                                                    <option value="GGS23">GGS23</option>
                                                    <option value="Clairwood">Clairwood</option>
                                                    <option value="Joberg 1">Joberg 1</option>
                                                </select>
                                            </div>
                                            <div class="input-containers focus form-group col-3 col-md-3">
                                                <input type="date" class="form-control " name="name" id="name">
                                                <label for="">Created Date Start</label>
                                                <span>Created Date Start</span>
                                            </div>

                                            <div class="input-containers focus form-group col-3 col-md-3">
                                                <input type="date" class="form-control " name="name" id="name">
                                                <label for="">Created Date End</label>
                                                <span>Created Date End</span>
                                            </div>
                                            <div class=" form-group col-3 leftrightmulti">
                                                <label for="" class="marglft-10">Status</label>
                                                <select class="js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="Current">Current</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Exported">Exported</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: left;">
                                                <input type="button" class="btn-inverse-dark custom_btn secondary" onclick="getData(); return false;" id="save_btn" value="Update">
                                            </div>
                                        </div>
                                    </form>
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