<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Employee ";

?>
<?php include "../../extra/top_header.php"; ?>
<style>

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
                                        <h4 class="card-title">Create Master </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
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
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row" id="fields">

                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-primary custom_btn_resize">Submit</a>
                                            <a href="#" class="btn btn-info custom_btn_resize">Delete</a>
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
    var row = '';
    $('#master_type').change(function() {
        var row = '<br><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Code</label><span>Code</span></div>   <div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Description</label><span>Description</span></div>';

        var container_type = '<br><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" >  <label for="">Code</label><span>Code</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Description</label><span>Description</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Tare Weight</label><span>Tare Weight</span></div>';

        var documents = '<br><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Code</label><span>Code</span>  </div><div class="input-containers form-group col-3"><input type="text" class="input form-control" ><label for="">Description</label><span>Description</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control"  ><label for="">Documents Type</label><span>Documents Type</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" ><label for="">API Link</label><span>API Link</span></div>';

        var ports = '<br><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" > <label for="">Code</label><span>Code</span> </div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Description</label><span>Description</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">City</label><span>City</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Country</label><span>Country</span></div>';

        var vechile_models = '<br><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" >  <label for="">Code</label><span>Code</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Description</label><span>Description</span></div><div class="input-containers form-group col-3"><input type="text" class="input form-control" placeholder="" ><label for="">Vehicle Manufacturer Code</label><span>Vehicle Manufacturer Code</span></div>';

        $master = $('#master_type').val();
        if ($master == 'bank_account' || $master == 'cities' || $master == 'countries' || $master == 'country_code' || $master == 'currencies' || $master == 'empty_depot' || $master == 'full_depot' || $master == 'payment_type' || $master == 'payment_type' || $master == 'ports_stacks' || $master == 'ports_stacks' || $master == 'price_term' || $master == 'units' || $master == 'vechile_manufa' || $master == 'process' || $master == 'bins') {

            $("#fields").html(row);
            // var row='';
        } else if ($master == 'container_type') {
            $("#fields").html(container_type);

        } else if ($master == 'documents') {
            $("#fields").html(documents);

        } else if ($master == 'ports') {

            $("#fields").html(ports);

        } else if ($master == 'vechile_models') {
            $("#fields").html(vechile_models);

        } else {

        }
        inputs = document.querySelectorAll(".input");
        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });
    });
</script>