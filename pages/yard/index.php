<?php
include '../../frontend_config.php';
include '../../frontend_function.php';
include "../../useraccess.php";
$page_title = "Yard";
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
                        <div class="cd-h-timeline__container container" style="max-width:700px;">
                            <div class="cd-h-timeline__dates">
                                <div class="cd-h-timeline__line">
                                    <ol>
                                        <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">Location Details</a></li>
                                        <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">Scale(s)</a></li>
                                        <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">Inventory</a></li>
                                    </ol>

                                    <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                                </div> <!-- .cd-h-timeline__line -->
                            </div> <!-- .cd-h-timeline__dates -->

                            <ul>
                                <li><a href="#0" class="d-none text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                                <li><a href="#0" class="d-none text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next cd-h-timeline__navigation--inactive">Next</a></li>
                            </ul>
                        </div> <!-- .cd-h-timeline__container -->

                        <div class="cd-h-timeline__events">
                            <ol>
                                <li class="cd-h-timeline__event text-component cd-h-timeline__event--selected">
                                    <div class="row">
                                        <div class="col-12 grid-margin">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Create Yard </h4><br>
                                                    <!-- <h5>Location Details</h5> -->

                                                    <form class="form-sample" id="myForm" name="myForm">
                                                        <div class="row">
                                                            <div class="input-containers form-group col-3 col-md-3">
                                                                <input type="text" class="input form-control" name="name" id="name">
                                                                <label for="">Name</label>
                                                                <span>Name</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3 focus">
                                                                <input type="text" class="input form-control" name="latitude" id="latitude" value="12.9604332" readonly>
                                                                <label for="">Latitude</label>
                                                                <span>Latitude</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3 focus">
                                                                <input type="text" class="input form-control" name="longitude" id="longitude" value="77.584945" readonly>
                                                                <label for="">Longitude</label>
                                                                <span>Longitude</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3">
                                                                <input type="text" class="input form-control" name="city" id="city">
                                                                <label for="">City</label>
                                                                <span>City</span>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row">

                                                        </div> -->
                                                        <div class="row">
                                                            <div class="input-containers form-group col-3 col-md-3">
                                                                <input type="text" class="input form-control" name="yard_code" id="yard_code" maxlength="2">
                                                                <label for="">Yard Code</label>
                                                                <span>Yard Code</span>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3">
                                                                <input type="text" class="input form-control" name="percentage" id="percentage">
                                                                <label for="">Pecentage</label>
                                                                <span>Pecentage</span>
                                                            </div>
                                                            <div class="form-group col-3 col-md-3">
                                                                <div class="switch">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="lever"></span>Tick to Override Org Tax
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-3 col-md-3">
                                                                <select name="tag_customer" class="form-control js-example-basic-single w-100" id="status">
                                                                    <option value="">Status</option>
                                                                    <option value="purchase">Purchase</option>
                                                                    <option value="local">Local</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-3 col-md-3">
                                                                <div class="switch">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="lever"></span>Tick to Set Limit
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-3 col-md-3">
                                                                <select name="module" class="form-control js-example-basic-single w-100" id="module">
                                                                    <option value="">Module</option>
                                                                    <option value="purchase">Purchase</option>
                                                                    <option value="local">Local</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-containers form-group col-3 col-md-3">
                                                                <input type="text" class="input form-control" name="limit" id="limit">
                                                                <label for="">Limit</label>
                                                                <span>Limit</span>
                                                            </div>
                                                            <div class="form-group col-3 col-md-3">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-containers form-group col-6">
                                                                <textarea rows="4" cols="50" name="address" id="address" class="input form-control" aria-invalid="false" id="outlined-name" style="height: 80px;"></textarea>
                                                                <label for="">Address</label>
                                                                <span>Address</span>
                                                            </div>
                                                            <div class=" form-group col-3">
                                                                <label for="">Tag Employee</label>

                                                                <select name="tag_employee" id="tag_employee" class="js-example-basic-multiple w-100" multiple="multiple">
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
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12" style="text-align: center;">
                                                                <button type="button" class="btn btn-primary custom_btn_resize" onclick="save_yard()">Update</button>
                                                            </div>
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
                                                    <!-- <label for="">Scale</label> -->
                                                    <div class="row">
                                                        <div class="form-group col-4 col-md-3 flexcontainer">
                                                            <h4 class="card-title">Scale</h4>
                                                            <input type="button" class="btn-inverse-dark custom_btn secondary yardaddbtn" id="add_btn" value="Add Scale">
                                                        </div>
                                                    </div>
                                                    <div class="row" id="scalestoadd">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12" style="text-align: left;">
                                                            <a href="#" class="btn btn-primary custom_btn_resize">Submit</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cd-h-timeline__event text-component">
                                    <div class="row">
                                        <div style="width:97%;">
                                            <table id="order-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead>
                                                    <tr>
                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Code</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Purchase Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Category</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td>
                                                            24
                                                        </td>
                                                        <td>
                                                            Test
                                                        </td>
                                                        <td>
                                                            Ferrous
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>
                                                            24
                                                        </td>
                                                        <td>
                                                            Test
                                                        </td>
                                                        <td>
                                                            Ferrous
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>
                                                            24
                                                        </td>
                                                        <td>
                                                            Test
                                                        </td>
                                                        <td>
                                                            Ferrous
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>
                                                            24
                                                        </td>
                                                        <td>
                                                            Test
                                                        </td>
                                                        <td>
                                                            Ferrous
                                                        </td>
                                                        <td>
                                                            2
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="creater">
                                    <span>Created By: Yatin Kanekar</span>
                                    <span>Created on: 25 October 2022, 13:29:51</span>
                                </p>
                            </div>
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
    $(function() {
        $('#order-listing').DataTable();
    });
    var i = 1;
    var j = 1;
    $(document).ready(function() {

        $("#add_btn").click(function() {
            var str = '';
            str += '<div id="full_package_' + i + '" style="margin-bottom:25px;">';
            str += '<div class="row" id="row_' + i + '">';
            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="scalename_' + i + '"><label for="scalename_' + i + '">Scale Name</label><span>Scale Name</span></div></div>';
            str += '<div class="col-3"><div class="input-containers"><input type="text" class="input form-control" id="scaleId_' + i + '"><label for="scaleId_' + i + '">Scale Name</label><span>Scale Name</span></div></div>';
            str += '<div class="col-1"><div class="input-containers"><input type="button" class="btn-inverse-dark custom_btn secondarys" id="add_btn" value="Add CCTV URL" onclick="addmorecctv(' + i + ');"></div></div>';
            str += '<div class="col-1"><div class="input-containers"><button type="button" class="btn btn-dark btn-rounded btn-icon" onclick="removescale(' + i + ')"><i class="mdi mdi-delete-forever"></i></button></div></div>';
            str += '</div>';
            str += '<div class="row" id="row_' + i + '_cctv" style="margin-top:2px;">';
            str += '</div>';
            str += '</div>';
            $("#scalestoadd").append(str);
            i++;
            inputs = document.querySelectorAll(".input");
            inputs.forEach((input) => {
                input.addEventListener("focus", focusFunc);
                input.addEventListener("blur", blurFunc);
            });
        });
    });

    function addmorecctv(row) {
        var str = '<div class="row" id="cctv_' + row + '_' + j + '_row">';
        str += '<div class="col-1" style="text-align: right;font-size: 1.5rem;"><i class="mdi mdi-hand-pointing-right"></i></div>';
        str += '<div class="col-2"><div class="input-containers"><input type="text" class="input form-control" id="scalename_' + row + '_cctvname_' + j + '"><label for="scalename_' + row + '_cctvname_' + j + '">CCTV Name</label><span>CCTV Name</span></div></div>';
        str += '<div class="col-2"><div class="input-containers"><input type="text" class="input form-control" id="scalename_' + row + '_cctvurl_' + j + '"><label for="scalename_' + row + '_cctvurl_' + j + '">CCTV URL</label><span>CCTV URL</span></div></div>';
        str += '<div class="col-2"><div class="input-containers"><button type="button" class="btn btn-icon" onclick="removecctv(' + row + ',' + j + ')"><i class="mdi mdi-delete-forever"></i></button></div></div>';
        str += '</div>';
        $("#row_" + row + '_cctv').append(str);
        inputs = document.querySelectorAll(".input");
        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });
        j++;
    }

    function removescale(scale) {
        $("#full_package_" + scale).remove();
    }

    function removecctv(cctvpara1, cctvpara2) {
        $("#cctv_" + cctvpara1 + '_' + cctvpara2 + "_row").remove();
    }


    function save_yard() {

        var name = $('#name').val();
        var latitude = $('#latitude').val();
        var longitude = $('#longitude').val();
        var city = $('#city').val();
        var yard_code = $('#yard_code').val();
        var percentage = $('#percentage').val();
        var stackcode = $('#stackcode').val();
        var status = $('#status').val();
        var limit = $('#limit').val();
        var address = $('#address').val();
        var modules = $('#module').val();
        var address = $('#address').val();
        var tag_employee = $('#tag_employee').val();


        if (name == '') {

            $.toast({
                heading: 'Error',
                text: 'Name is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (latitude == '') {
            $.toast({
                heading: 'Error',
                text: 'Latitude Name is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;
        } else if (longitude == '') {
            $.toast({
                heading: 'Error',
                text: 'Longitude is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (city == '') {
            $.toast({
                heading: 'Error',
                text: 'City is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (yard_code == '') {
            $.toast({
                heading: 'Error',
                text: 'Yard Code  is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;



        } else if (percentage == '') {
            $.toast({
                heading: 'Error',
                text: 'Percentage is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (status == '') {
            $.toast({
                heading: 'Error',
                text: 'Status is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (address == '') {
            $.toast({
                heading: 'Error',
                text: 'Address  is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return falsemodule;

        } else if (limit == '') {
            $.toast({
                heading: 'Error',
                text: 'Limit  is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (modules == '') {
            $.toast({
                heading: 'Error',
                text: 'Modules  is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (address == '') {
            $.toast({
                heading: 'Error',
                text: 'Address  is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else if (tag_employee == '') {
            $.toast({
                heading: 'Error',
                text: 'Tag employee  is required',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
            return false;

        } else {

            $.ajax({
                type: "POST",
                url: 'getData.php',
                data: $('form').serialize(),
                dataType: 'JSON',
                success: function(response) {
                    var jsonData = JSON.parse(response);
                    var name = response.title;
                    // console.log(name);
                    // user is logged in successfully in the back-end
                    // let's redirect
                    // if (jsonData.success == "1")
                    // {
                    //     location.href = 'my_profile.php';
                    // }
                    // else
                    // {
                    //     alert('Invalid Credentials!');
                    // }
                }
            });

        }

    }
</script>