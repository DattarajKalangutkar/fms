<?php
include '../../frontend_config.php';
include '../../frontend_function.php';
include "../../useraccess.php";
$page_title = "Organization";
?>
<?php include "../../extra/top_header.php"; ?>
<style type="text/css">
    .select2-container {
        width: 100% !important;
    }
</style>

<body>
    <div class="container-scroller">
        <?php include "../../extra/_navbar.php"; ?>
        <div class="container-fluid page-body-wrapper">
            <?php include "../../extra/_sidebar.php"; ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
                        <div class="cd-h-timeline__container container" style="max-width: 700px;">
                            <div class="cd-h-timeline__dates">
                                <div class="cd-h-timeline__line">
                                    <ol>
                                        <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">Basic Details</a></li>
                                        <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">Config</a></li>
                                        <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">History</a></li>
                                    </ol>
                                    <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                                </div>
                                <!-- .cd-h-timeline__line -->
                            </div>
                            <!-- .cd-h-timeline__dates -->
                            <ul>
                                <li><a href="#0" class="d-none text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                                <li><a href="#0" class="d-none text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next cd-h-timeline__navigation--inactive">Next</a></li>
                            </ul>
                        </div>
                        <!-- .cd-h-timeline__container -->
                        <div class="cd-h-timeline__events">
                            <ol>
                                <li class="cd-h-timeline__event text-component cd-h-timeline__event--selected">
                                    <div class="row">
                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Basic Details</h5>
                                                        </div>
                                                        <div class=" form-group col-6">
                                                            <h5>Registerated Details</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-containers form-group col-3">
                                                                <input type="text" name="name" class="input form-control" id="name">
                                                                <label for="">Name</label>
                                                                <span>Name</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3">
                                                                <input type="email" name="email" class="input form-control" id="email">
                                                                <label for="">Email</label>
                                                                <span>Email</span>

                                                            </div>
                                                            <div class="input-containers form-group col-3">

                                                                <input type="text" name="licence_id" class="input form-control" id="exampleInputUsername1">
                                                                <label for="">Licence ID</label>
                                                                <span>Licence ID</span>
                                                            </div>
                                                            <div class=" form-group col-3">

                                                                <select name="currency_format" class="form-control js-example-basic-single w-100" id="currency_format">
                                                                    <option value="">Select currency format</option>
                                                                    <option value="mayur">INR</option>

                                                                </select>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="form-group  col-3">
                                                                <select name="country_codes" class="form-control js-example-basic-single w-100" id="country_codes">
                                                                    <option value="">Select Country code</option>
                                                                    <option value="mayur">Mayur</option>
                                                                    <option value="mayur">Mayur</option>
                                                                    <option value="test">Test</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-containers form-group col-3">
                                                                <input type="text" class="input form-control" name="phone" id="exampleInputUsername1">
                                                                <label for="">Phone Number</label>
                                                                <span>Phone Number</span>

                                                            </div>
                                                            <div class=" input-containers form-group col-2">
                                                                <input type="text" class="input form-control" id="exampleInputUsername1">
                                                                <label for="">VAT Registration ID</label>
                                                                <span>VAT Registration ID</span>

                                                            </div>
                                                            <div class=" input-containers form-group col-2">
                                                                <input type="text" class="input form-control" id="exampleInputUsername1">
                                                                <label for="">Company Registration ID</label>
                                                                <span>Company Registration ID</span>
                                                            </div>
                                                            <div class=" input-containers form-group col-2">
                                                                <input type="text" class="input form-control" id="exampleInputUsername1">
                                                                <label for="">Tax Percentage</label>
                                                                <span>Tax Percentage</span>
                                                            </div>


                                                            <br>
                                                            <br>

                                                            <div class="input-containers form-group col-6">
                                                                <textarea rows="4" cols="34" class="input form-control" aria-invalid="false" id="outlined-name" style="height: 57px;"></textarea>
                                                                <label for="">Address</label>
                                                                <span>Address</span>
                                                            </div>
                                                            <div class="input-containers form-group col-6">
                                                                <textarea rows="4" cols="34" class="input form-control" aria-invalid="false" id="outlined-name" style="height: 57px;"></textarea>
                                                                <label for="">Address</label>
                                                                <span>Address</span>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <h4>Logo</h4>
                                                                <div class="file-upload-wrapper">
                                                                    <div id="fileuploader">
                                                                        <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                                                                            <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload
                                                                                <form method="POST" action="YOUR_FILE_UPLOAD_URL" enctype="multipart/form-data" style="margin: 0px; padding: 0px;">
                                                                                    <input type="file" id="ajax-upload-id-1666784081485" name="myfile[]" accept="*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;">
                                                                                </form>
                                                                            </div><span><b>Drag &amp; Drop Files</b></span>
                                                                        </div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="ajax-file-upload-container"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-6">
                                                                <h4>File</h4>

                                                                <div class="file-upload-wrapper">
                                                                    <div id="fileuploader">
                                                                        <div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;">
                                                                            <div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload
                                                                                <form method="POST" action="YOUR_FILE_UPLOAD_URL" enctype="multipart/form-data" style="margin: 0px; padding: 0px;">
                                                                                    <input type="file" id="ajax-upload-id-1666784081485" name="myfile[]" accept="*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;">
                                                                                </form>
                                                                            </div><span><b>Drag &amp; Drop Files</b></span>
                                                                        </div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="ajax-file-upload-container"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12" style="text-align: center;">
                                                                <input type="button" class="btn-inverse-dark custom_btn secondary" value="Submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cd-h-timeline__event text-component">
                                    <div class="row">
                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <input type="button" class="btn-inverse-dark custom_btn secondary" id="add-config" value="Add New Config">
                                                    <table id="table-config" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                        <thead>
                                                            <tr>
                                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending">Sr.No </th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Module</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Weight Diffrence From</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Weight Diffrence To</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">Color Code</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd">
                                                                <td class="sorting_1">1</td>
                                                                <td>
                                                                    <select name="module" class="form-control js-example-basic-single" id="Module">
                                                                        <option value="">Select Module</option>
                                                                        <option value="mayur">Local Purchase</option>
                                                                        <option value="mayur">Local Sales</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="input-containers">
                                                                        <input type="number" class="input form-control" id="from_1" style="width: 93%;height: 90%;margin-left: 6px;">
                                                                        <label for="from_1">From</label>
                                                                        <span>From</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="input-containers">
                                                                        <input type="number" class="input form-control" id="to_1" style="width: 93%;height: 90%;">
                                                                        <label for="to_1">To</label>
                                                                        <span>To</span>
                                                                    </div>
                                                                </td>
                                                                <td> <input type="color" class="" id="color_1"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cd-h-timeline__event text-component">
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="button" class="btn-inverse-dark custom_btn secondary" id="add-config" value="Fetch History" style="margin:1rem 0px;">
                                            <div class="row">
                                                <div style="width:97%;">
                                                    <table id="config-listing" class="table">
                                                        <thead>
                                                            <tr>

                                                                <th>
                                                                    Org.Name
                                                                </th>
                                                                <th>
                                                                    Email
                                                                </th>
                                                                <th>
                                                                    Country Code
                                                                </th>
                                                                <th>
                                                                    Phone Number
                                                                </th>
                                                                <th>
                                                                    Address
                                                                </th>
                                                                <th>
                                                                    Licence ID
                                                                </th>
                                                                <th>
                                                                    Currency Format
                                                                </th>
                                                                <th>
                                                                    VAT Registeration
                                                                </th>



                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd">

                                                                <td>
                                                                    Herman Beck
                                                                </td>
                                                                <td>
                                                                    Photoshop
                                                                </td>
                                                                <td>
                                                                    $ 77.99
                                                                </td>
                                                                <td>
                                                                    May 15, 2015
                                                                </td>
                                                                <td>
                                                                    Herman Beck
                                                                </td>
                                                                <td>
                                                                    Photoshop
                                                                </td>
                                                                <td>
                                                                    $ 77.99
                                                                </td>
                                                                <td>
                                                                    May 15, 2015
                                                                </td>
                                                            </tr>
                                                            <tr class="even">

                                                                <td>
                                                                    Herman Beck
                                                                </td>
                                                                <td>
                                                                    Photoshop
                                                                </td>
                                                                <td>
                                                                    $ 77.99
                                                                </td>
                                                                <td>
                                                                    May 15, 2015
                                                                </td>
                                                                <td>
                                                                    Herman Beck
                                                                </td>
                                                                <td>
                                                                    Photoshop
                                                                </td>
                                                                <td>
                                                                    $ 77.99
                                                                </td>
                                                                <td>
                                                                    May 15, 2015
                                                                </td>
                                                            </tr>

                                                           </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <!-- .cd-h-timeline__events -->
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../extra/bottom_footer.php"; ?>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        var i = 2;
        $("#add-config").click(function() {
            var inputText = "module_" + i;
            var module1 = '<select name="' + inputText + '" class="form-control js-example-basic-single" id="' + inputText + '"><option value="">Select Module</option><option value="mayur">Local Purchase</option><option value="mayur">Local Sales</option></select>';
            var from = '<div class="input-containers"><input type="number" class="input form-control" id="from_' + i + '" style="width: 93%;height: 90%;margin-left: 6px;"><label for="from_' + i + '">From</label><span>From</span></div>';
            var to = '<div class="input-containers"><input type="number" class="input form-control" id="to_' + i + '" style="width: 93%;height: 90%;"><label for="">To</label><span>From</span></div>';
            var color = '<input type="color" class="" id="color_' + i + '" placeholder="To">';
            var row = "<tr class='odd'><td>" + i + "</td><td>" + module1 + "</td><td>" + from + "</td><td>" + to + "</td><td>" + color + "</td></tr>";
            //var row
            $("#table-config tbody").append(row);
            $(".js-example-basic-single").select2();
            i++;
            inputs = document.querySelectorAll(".input");

            inputs.forEach((input) => {
                input.addEventListener("focus", focusFunc);
                input.addEventListener("blur", blurFunc);
            });
        });
    });



    $(function() {
        $('#config-listing').DataTable();
    });
</script>