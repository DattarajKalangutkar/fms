<?php
include '../../frontend_config.php';
include '../../frontend_function.php';
include "../../useraccess.php";
$page_title = "Stakeholder";
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
                    <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
                        <p class="text-center margin-top-md margin-bottom-xl"> </p>

                        <div class="cd-h-timeline__container container" style="max-width: 700px;">
                            <div class="cd-h-timeline__dates">
                                <div class="cd-h-timeline__line">
                                    <ol>
                                        <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">Basic Details</a></li>

                                        <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">History</a></li>
                                    </ol>

                                    <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                                </div> <!-- .cd-h-timeline__line -->
                            </div> <!-- .cd-h-timeline__dates -->

                            <ul>
                                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next cd-h-timeline__navigation--inactive">Next</a></li>
                            </ul>
                        </div> <!-- .cd-h-timeline__container -->

                        <div class="cd-h-timeline__events">
                            <ol>
                                <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
                                    <div class="row">
                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Create Stakeholder </h4><br>
                                                    <!-- <h5>Location Details</h5> -->

                                                    <form class="form-sample" id="myForm" name="myForm">
                                                        <div class="row">

                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="stackactive" id="active" value="active" checked="">
                                                                        Active
                                                                        <i class="input-helper"></i><i class="input-helper"></i></label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="stackactive" id="inactive" value="inactive" >
                                                                        Inactive
                                                                        <i class="input-helper"></i><i class="input-helper"></i></label>
                                                                </div>

                                                            </div>
                                                            <div class="input-containers form-group col-3 ">
                                                                <input type="text" class="input form-control" name="title" id="title">
                                                                <label for="">Title</label>
                                                                <span>Title</span>
                                                             

                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3 ">
                                                                <input type="text" class="input form-control" name="stackholdername" id="stackholdername">
                                                                <label for="">Stackholder Name*</label>
                                                                <span>Stackholder Name*</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3 ">
                                                                <input type="text" class="input form-control" name="initials" id="initials">
                                                                <label for="">Initials</label>
                                                                <span>Initials</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3">
                                                                <input type="text" class="input form-control" name="stackholdernick" id="stackholdernick">
                                                                <label for="">Stackholder Nickname</label>
                                                                <span>Stackholder Nickname</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row">

                                                        </div> -->
                                                        <div class="row">
                                                            <div class=" form-group col-3">

                                                            <p style="margin-bottom: -0.5rem;">Select Tags *</p>
                                                                <select name="categories[]" id="categories" class=" select-margin js-example-basic-multiple w-100" multiple="multiple">
                                                                    <option>Select Tags</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                                    <option value="AM">America</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                                    <option value="AM">America</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                                    <option value="AM">America</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                                    <option value="AM">America</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="RU">Russia</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-3">

                                                            <p style="margin-bottom: -0.5rem;">&nbsp;</p>

                                                                <select name="stacktype" id="stacktype" class="form-control js-example-basic-single w-100" id="stacktype">
                                                                    <option value="">Stackholder Type</option>
                                                                    <option value="purchase">Purchase</option>
                                                                    <option value="local">Local</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-containers form-group col-3 " style="margin-top:-6px;">

                                                                <input type="text" class="input form-control" name="stackcode" id="stackcode">
                                                                <label for="">Stackholder Code*</label>
                                                                <span>Stackholder Code*</span>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        

                                                        <div class="row">
                                                            <b> Contact Details</b>
                                                            <div class="col-3">

                                                                <select name="country_code" id="country_code" class="select-margin form-control js-example-basic-single w-100" id="country_code">
                                                                    <option value="">Country Code *</option>
                                                                    <option value="purchase">Purchase</option>
                                                                    <option value="local">Local</option>
                                                                </select>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="tel" class="input form-control" name="phone" id="phone">
                                                                <label for="">Phone Number*</label>
                                                                <span>Phone Number*</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="faxname" id="faxname">
                                                                <label for="">Fax Number</label>
                                                                <span>Fax Number</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="email" class="input form-control" name="email" id="email">
                                                                <label for="">Email</label>
                                                                <span> Email</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="contactperson" id="contactperson">
                                                                <label for="">Contact Person*</label>
                                                                <span> Contact Person*</span>

                                                            </div>
                                                            <div class="col-3">
                                                                <select name="currency" class=" select-margin form-control  js-example-basic-single w-100" id="currency">
                                                                    <option>Select Currency*</option>
                                                                    <option>US Doller</option>
                                                                    <option>Indian Rupees</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>

                                                        <div class="row">
                                                            <b>Registeration Info</b>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="vatregistid" id="vatregistid">
                                                                <label for="">VAT Registeration ID</label>
                                                                <span>VAT Registeration ID</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="companyregistid" id="companyregistid">
                                                                <label for="">Company Registeration ID</label>
                                                                <span>Company Registeration ID</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="postaladdress" id="postaladdress">
                                                                <label for="">Postal Address</label>
                                                                <span>Postal Address</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="gstnumber" id="gstnumber">
                                                                <label for="">GST Number</label>
                                                                <span> GST Number</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="pannumber" id="pannumber">
                                                                <label for="">PAN Number</label>
                                                                <span> PAN Number</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="iecnumber" id="iecnumber">
                                                                <label for="">IEC Number</label>
                                                                <span> IEC Number</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="city" id="city">
                                                                <label for="">City</label>
                                                                <span> City</span>

                                                            </div>
                                                            <div class="input-containers col-3">
                                                                <input type="text" class="input form-control" name="state" id="state">
                                                                <label for="">State</label>
                                                                <span> State</span>

                                                            </div>
                                                            <div class="col-3">
                                                            <p style="margin-bottom: -0.5rem;"> Tag Country*</p>

                                                                <select name="regicurrency" class=" select-margin form-control js-example-basic-single w-100" id="regicurrency">
                                                                    <option value="">India</option>
                                                                    <option value="purchase">South Africa</option>
                                                                  
                                                                </select>

                                                            </div>
                                                            <div class="input-containers col-3" style="margin-top: 20px;">
                                                                <input type="text" class="input form-control" name="opbox" id="opbox">
                                                                <label for="">OP BOX</label>
                                                                <span> OP BOX</span>

                                                            </div>

                                                        </div>
                                                        <br>
                                                        <br>

                                                        <div class="row">
                                                            <b> Bank and Payment Info</b>
                                                            <div class="col-2">
                                                                <input type="button" class="btn btn-primary custom_btn_resize child btn-width" id="add_bank" value="+ Add New Bank and Payment Details">

                                                            </div>
                                                            <div id="bank-fields">

                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>

                                                        <div class="row">
                                                            <b> SKU Info</b>
                                                            <div class="col-2">

                                                                <div>

                                                                    <input style="width:55% !important" type="button" class="btn btn-primary custom_btn_resize child btn-width" id="add-sku" value="+ Add SKU">

                                                                </div>
                                                            </div>
                                                            <div id="add-sku-fields">

                                                            </div>
                                                        </div>

                                                        <div class="form-group col-6">
                                                            <h4>Files</h4>
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
                                                        <br>
                                                        <div class="form-group col-3">
                                                            <button class="btn btn-primary" id="startUpload" type="submit" onclick="save_stakeholder()">Submit</button>
                                                        </div>
                                                    </form>
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
                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                            <table id="order-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                                <thead>
                                                                    <tr>

                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="text-align: center;">Code</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="text-align: center;">Purchase Name</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="text-align: center;">Category</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="text-align: center;">Stock</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td>2012/08/03</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>New York</td>
                                                                        <td>$1500</td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td>2015/04/01</td>
                                                                        <td>Doe</td>
                                                                        <td>Brazil</td>
                                                                        <td>$4500</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cd-h-timeline__event text-component">

                                </li>
                                <li class="cd-h-timeline__event text-component">

                                </li>
                            </ol>
                        </div> <!-- .cd-h-timeline__events -->
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
        var i = 1;
        $("#add_bank").click(function() {
            var str = '';
            str += '<div id="full_package_' + i + '" style="margin-bottom:25px;">';
            str += '<div class="row" id="row_' + i + '">';
            str += '<div class="col-3"><div class="input-containers"><input name="bankname" type="text" class="input form-control" id="bankname_' + i + '" required><label for="bankname_' + i + '">Bank Name</label><span>Bank Name</span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="branchname_' + i + '" required><label for="branchname_' + i + '">Branch Name</label><span>Branch Name</span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="routing_' + i + '" required><label for="routing_' + i + '">Routing Code </label><span>Routing Code </span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="accountname_' + i + '" required><label for="accountname_' + i + '">Account Name </label><span>Account Name </span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="bankaccount_' + i + '" required><label for="bankaccount_' + i + '">Bank Account Number </label><span>Bank Account Number </span></div></div>';


            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="bankaccounttype_' + i + '" required><label for="bankaccounttype_' + i + '">Bank Account Type </label><span>Bank Account Type </span></div></div>';


            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="iban_' + i + '"><label for="iban_' + i + '">IBN Number </label><span>IBN Number </span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="ifsc_' + i + '"><label for="ifsc_' + i + '">IFSC Code </label><span>IBN Code </span></div></div>';

            str += '<div class="col-3"><select name="tag_customer" class="select-margin form-control js-example-basic-single w-100" id="accountcurrency_'+i+'"> <option value="">Account Currency*</option><option value="purchase">Purchase</option><option value="local">Local</option></select> </div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="swift_' + i + '"><label for="swift_' + i + '">Swift Code </label><span>Swift Code </span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="bankcity_' + i + '"><label for="bankcity_' + i + '">Bank City </label><span>Bank City </span></div></div>';

            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="bankcountry_' + i + '"><label for="bankcountry_' + i + '">Bank Country </label><span>Bank Country </span></div></div>';

            str += '<div class="col-4"><div class="input-containers"><textarea rows="4" cols="34" class="input form-control" aria-invalid="false" id="outlined-name" style="height: 57px;" id="address_'+i+'"></textarea><label for="address_' + i + '">Address </label><span>Address </span></div></div>';

            str += '<div class="col-1"><div class="input-containers"><button type="button" class="btn btn-dark btn-rounded btn-icon" onclick="removescale(' + i + ')"><i class="mdi mdi-delete-forever"></i></button></div></div>';
            str += '</div>';
            str += '<div class="row" id="row_' + i + '_cctv" style="margin-top:2px;">';
            str += '</div>';
            str += '</div>';
            $("#bank-fields").append(str);
            i++;
            inputs = document.querySelectorAll(".input");
            inputs.forEach((input) => {
                input.addEventListener("focus", focusFunc);
                input.addEventListener("blur", blurFunc);
            });
        });

        $("#add-sku").click(function() {
            var j=1;
            var str = '';
            str += '<div id="full_package_' + j + '" style="margin-bottom:25px;">';
            str += '<div class="row" id="row_' + j + '">';
            str += '<div class="col-3"><select name="skumodule" class="select-margin form-control js-example-basic-single w-100" id="skumodule_'+j+'"> <option>Search And Select SKU</option><option value="purchase">Purchase</option><option value="local">Local</option></select> </div>';
            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="salesprice_' + j + '"><label for="salesprice_' + j + '">Sales Price</label><span>Sales Price</span></div></div>';
            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="purchaseprice_' + j + '"><label for="purchaseprice_' + j + '">Purchase Price </label><span>Purchase Price </span></div></div>';
            str += '<div class="col-1"><div class="input-containers"><button type="button" class="btn btn-dark btn-rounded btn-icon" onclick="removescale(' + j + ')"><i class="mdi mdi-delete-forever"></i></button></div></div>';
            str += '</div>';
            str += '<div class="row" id="row_' + j + '_cctv" style="margin-top:2px;">';
            str += '</div>';
            str += '</div>';
            $("#add-sku-fields").append(str);
            j++;
            inputs = document.querySelectorAll(".input");
            inputs.forEach((input) => {
                input.addEventListener("focus", focusFunc);
                input.addEventListener("blur", blurFunc);
            });
        });
    });

    function removescale(scale) {
        $("#full_package_" + scale).remove();
    }



    $(function() {
        $('#order-listing').DataTable();
    });


    

    Dropzone.autoDiscover = false;

    $(function() {
        //Dropzone class
        var myDropzone = new Dropzone(".dropzone", {
            url: "upload.php",
            paramName: "file",
            maxFilesize: 2,
            maxFiles: 10,
            acceptedFiles: "image/*,application/pdf",
            autoProcessQueue: false
        });

        $('#startUpload').click(function() {
            myDropzone.processQueue();
        });
    });
</script>