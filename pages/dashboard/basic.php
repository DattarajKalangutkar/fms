<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Dashboard";

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
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <div class="card bg-primary card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">SITES</h4>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                                                            <h2 class="text-dark">17</h2>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <canvas id="status-summary"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="card bg-success card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">SKUS</h4>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                                                            <h2 class="text-dark">23</h2>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <canvas id="status-summary2"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="card bg-warning card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">BUYER</h4>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                                                            <h2 class="text-dark">4</h2>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <canvas id="status-summary3"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="card bg-info card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">CUSTOMER</h4>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <!-- <p class="status-summary-ight-white mb-1">Closed Value</p> -->
                                                            <h2 class="text-dark">9</h2>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <canvas id="status-summary4"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" form-group col-12 ">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">Trafic</h4>
                                                        <!-- <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5> -->
                                                    </div>
                                                    <div id="performance-line-legend">
                                                        <div class="chartjs-legend">
                                                            <ul>
                                                                <li><span style="background-color:#1F3BB3"></span>This week</li>
                                                                <li><span style="background-color:#52CDFF"></span>Last week</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chartjs-wrapper mt-4">
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-size-monitor">
                                                        <div class="chartjs-size-monitor-expand">
                                                            <div class=""></div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class=""></div>
                                                        </div>
                                                    </div>
                                                    <canvas id="performaneLine" style="display: block; width: 1615px; height: 150px;" width="1615" height="150" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <div class="card bg-info card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">Purchase</h4>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <div class="chartjs-size-monitor">
                                                                    <div class="chartjs-size-monitor-expand">
                                                                        <div class=""></div>
                                                                    </div>
                                                                    <div class="chartjs-size-monitor-shrink">
                                                                        <div class=""></div>
                                                                    </div>
                                                                </div>
                                                                <canvas id="status-summary5" width="298" height="66" style="display: block; width: 298px; height: 66px;" class="chartjs-render-monitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 border-top-0" style="display: flex; justify-content:space-evenly">
                                                <div class="col-2 text-center">
                                                    <h3>23</h3>
                                                    <p>Exported</p>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <span style="border-left: 2px solid black; height: 60px;">
                                                </div>
                                                <div class="col-2 text-center">
                                                    <h3>43</h3>
                                                    <p>Pending</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="card bg-warning card-rounded">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title card-title-dash text-white mb-4">Local Sales</h4>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="status-summary-chart-wrapper pb-4">
                                                                <div class="chartjs-size-monitor">
                                                                    <div class="chartjs-size-monitor-expand">
                                                                        <div class=""></div>
                                                                    </div>
                                                                    <div class="chartjs-size-monitor-shrink">
                                                                        <div class=""></div>
                                                                    </div>
                                                                </div>
                                                                <canvas id="status-summary6" width="298" height="66" style="display: block; width: 298px; height: 66px;" class="chartjs-render-monitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 border-top-0" style="display: flex; justify-content:space-evenly">
                                                <div class="col-2 text-center">
                                                    <h3>23</h3>
                                                    <p>Exported</p>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <span style="border-left: 2px solid black; height: 60px;">
                                                </div>
                                                <div class="col-2 text-center">
                                                    <h3>43</h3>
                                                    <p>Pending</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12" style="display: flex; justify-content: space-between;">
                                        <div class="col-3">
                                            Pending Items
                                        </div>
                                        <div class="col-4 row">
                                            <!-- <div class="col-3">
                                                <input type="radio" name="" class="" id="" value="Till Now">
                                            </div>
                                            <div class="col-3">Month</div>
                                            <div class="col-3">Yesterday</div>
                                            <div class="col-3">Today</div> -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="false">Till Now</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="contact-tab" data-bs-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="true">Yesterday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="today" data-bs-toggle="tab" href="#today-1" role="tab" aria-controls="today-1" aria-selected="true">Today</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 row" style="margin-left: 10px;">
                                        <div class="col-3 row">
                                            <span style="border-left: 2px solid blue; height: 55px;">
                                                <p>Purchase</p>
                                                <h3>50</h3>
                                            </span>
                                        </div>
                                        <div class="col-3 row">
                                            <span style="border-left: 2px solid green; height: 55px;">
                                                <p>Local Sales</p>
                                                <h3>50</h3>
                                            </span>
                                        </div>
                                        <div class="col-3 row">
                                            <span style="border-left: 2px solid orange; height: 55px;">
                                                <p>Export Sales</p>
                                                <h3>50</h3>
                                            </span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row" style="align-items: baseline;">
                                        <div class=" form-group col-6">
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Sat,29th oct</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Sun,30th oct</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Mon,1st Nov</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Tue,2nd Nov</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Wed,3rd Nov</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Thu,4th Nov</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Fri,5th Nov</small>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div class=" form-group col-6 ">
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Purchase</small>
                                                        <!-- <small>60%</small> -->
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-3">
                                                            <div class="progress-bar bg-muted" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-3">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Local Sales</small>
                                                        <!-- <small>60%</small> -->
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                        </div>
                                                        <div class="progress progress-lg mt-3">
                                                            <div class="progress-bar bg-muted" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-3">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="template-demo col-12 row">
                                                    <div class="d-flex justify-content-between col-2">
                                                        <small>Export Sales</small>
                                                        <!-- <small>60%</small> -->
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="progress progress-lg mt-2">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                        </div>
                                                        <div class="progress progress-lg mt-3">
                                                            <div class="progress-bar bg-muted" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                                        </div>
                                                        <div class="progress progress-lg mt-3">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12 dash_padding">
                                            <p>User Configuration</p>
                                            <hr>
                                            <table id="user_config" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead class="table table-secondary">
                                                    <tr>
                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending"> Purchase</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending"> Local Sales</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending"> Export Sales</th>
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

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" style="align-items: baseline;">
                                        <div class="form-group col-md-6 dash_padding">
                                            <p>Purchase Transcation</p>
                                            <hr>
                                            <table id="purchase_trasc" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead class="table table-secondary">
                                                    <tr>
                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Transaction Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Total Transactions</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Full Truck Photos</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">Item Photos</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Empty Truck Photos</th>
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
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group col-md-6 dash_padding">
                                            <p>Local Sales Transcation</p>
                                            <hr>
                                            <table id="local_trasc" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead class="table table-secondary">
                                                    <tr>
                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Transaction Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Total Transactions</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Full Truck Photos</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending">Item Photos</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Empty Truck Photos</th>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row" style="align-items: baseline;">
                                        <div class="form-group col-md-6 dash_padding">
                                            <p>Purchase Trends</p>
                                            <hr>
                                            <table id="purchase_trends" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead class="table table-secondary">
                                                    <tr>
                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Transcation ID</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Customer(Supplier)</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">User</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Action</th>
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
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group col-md-6 dash_padding">
                                            <p>Local Sales Trends</p>
                                            <hr>
                                            <table id="sales_trends" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                <thead class="table table-secondary">
                                                    <tr>
                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Transcation ID</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Customer(Buyer)</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">User</th>
                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Action</th>
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

<script type="text/javascript">
    $(function() {
        $('#user_config').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ],
            "bFilter": false,
            // "bInfo": false,
            // "bPaginate": false,
        });
        
        $('#purchase_trasc').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
        $('#local_trasc').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
        $('#purchase_trends').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
        $('#sales_trends').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
    });
</script>