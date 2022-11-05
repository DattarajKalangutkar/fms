<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Yard List";

?>
<?php include "../../extra/top_header.php"; ?>

<body>
    <div class="container-scroller">
        <?php include "../../extra/_navbar.php"; ?>
        <div class="container-fluid page-body-wrapper">
            <?php include "../../extra/_settings-panel.php"; ?>
            <?php include "../../extra/_sidebar.php"; ?>

            <div class="main-panel">
                <br>
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Analytics (Advanced) </h3>
                                    <p>Overview of all sections are shown here</p>
                                    <form class="form-sample" id="myForm" name="myForm">
                                        <div class="row">
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">Site</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">Supplier</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">Sales From</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">Contract Currency</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">Buyer</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">User</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">SKU</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">VAT Exclusive</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: 1px;">Created Date From</p>
                                                <input type="date" class="form-control " name="name" id="name">
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: 1px;">Created Date To</p>
                                                <input type="date" class="form-control " name="name" id="name">
                                            </div>
                                            <div class=" form-group col-2">
                                                <p style="margin-bottom: -0.5rem;">Status</p>
                                                <select class=" js-example-basic-multiple w-100" multiple="multiple">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AM">America</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                            </div>
                                            <div class=" form-group col-2 analytics">
                                                <input type="button" class="btn btn-primary custom_btn_resize child " value="SAERCH">
                                                <input type="button" class="btn btn-primary custom_btn_resize child " value="REFRESH">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" style="align-items: baseline;">
                                        <div class="form-group col-4 dash_padding">
                                            <p>Purchase Entries Current Stage</p>
                                            <hr>
                                            <div class="col-lg-12">

                                                <table id="purchase_list" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                    <thead class="table table-secondary">
                                                        <tr>
                                                            <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Yard</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Today</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Yesterday</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">All <br>Before</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class=" form-group col-4 dash_padding">
                                            <div class="col-lg-12 ">
                                                <p>Local Sales Entries Current Stage</p>
                                                <hr>
                                                <table id="local_list" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                    <thead class="table table-secondary">
                                                        <tr>
                                                            <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Yard</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Today</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Yesterday</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">All <br>Before</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class=" form-group col-4 dash_padding">
                                            <div class="col-lg-12">
                                                <p>Export Sales Entries Current Stage</p>
                                                <hr>
                                                <table id="export_list" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                    <thead class="table table-secondary">
                                                        <tr>
                                                            <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Yard</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Today</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Yesterday</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">All <br>Before</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <td>
                                                                YardSid
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                3
                                                            </td>
                                                            <td>
                                                                6
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <td>
                                                                YardSid2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" form-group col-6 ">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <h4 class="card-title">Purchase (Customer Vs Value)</h4>
                                            <hr>
                                            <canvas id="barChart1" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class=" form-group col-6">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <h4 class="card-title">Local Sales (Customer Vs Value)</h4>
                                            <hr>
                                            <canvas id="barChart2" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" form-group col-6">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <h4 class="card-title">Purchase (Item Vs Quantity)</h4>
                                            <hr>
                                            <canvas id="barChart3" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class=" form-group col-6">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <h4 class="card-title">Local Sales (Item Vs Quantity)</h4>
                                            <hr>
                                            <canvas id="barChart4" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" form-group col-6">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <h4 class="card-title">Purchase (Item Vs Value)</h4>
                                            <hr>
                                            <canvas id="barChart5" class="chartjs-render-monitor"></canvas>
                                        </div>
                                        <div class=" form-group col-6">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <h4 class="card-title">Local Sales (Item Vs Value)</h4>
                                            <hr>
                                            <canvas id="barChart6" class="chartjs-render-monitor"></canvas>
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

<script type="text/javascript">
    $(function() {
        $('#purchase_list').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
        $('#local_list').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
        $('#export_list').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
    });
</script>