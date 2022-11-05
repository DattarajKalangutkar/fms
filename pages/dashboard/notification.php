<?php
include "../../frontend_config.php";
include "../../frontend_function.php";
include "../../useraccess.php";
$page_title = "Dashboard || Notification";
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
                        <div class="cd-h-timeline__container container" style="max-width:900px;">
                            <div class="cd-h-timeline__dates">
                                <div class="cd-h-timeline__line">
                                    <ol>
                                        <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">Purchase</a></li>
                                        <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">Local Sales</a></li>
                                        <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">Export Sales</a></li>
                                        <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">Transfers</a></li>
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
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <table id="purchases-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending">ID</th>
                                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Date</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Description</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Tally Error</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
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
                                </li>
                                <li class="cd-h-timeline__event text-component">
                                    <div class="row">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                        <table id="local-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending">ID</th>
                                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Date</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Description</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Tally Error</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
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
                                </li>
                                <li class="cd-h-timeline__event text-component">
                                    <div class="row">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                        <table id="export-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending">ID</th>
                                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Date</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Description</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Tally Error</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
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
                                </li>
                                <li class="cd-h-timeline__event text-component">
                                    <div class="row">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                        <table id="transfer-listing" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending">ID</th>
                                                                        <th class=" sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending">Date</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending">Description</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending">Tally Error</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="odd">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="even">
                                                                        <td class="sorting_1">
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            May 15, 2015
                                                                        </td>
                                                                        <td>
                                                                            Lorem ipsum dolor sit amet.
                                                                        </td>
                                                                        <td>
                                                                            Tally Error
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
                                </li>
                            </ol>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../extra/bottom_footer.php"; ?>

</body>

<script type="text/javascript">
    $(function() {
        $('#purchases-listing').DataTable();
        $('#local-listing').DataTable();
        $('#export-listing').DataTable();
        $('#transfer-listing').DataTable();
    });
</script>