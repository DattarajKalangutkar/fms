<?php
include '../../frontend_config.php';
include '../../frontend_function.php';
$page_title = "Local Sales";
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
                        <div class="card-innerbody p_20">
                            <div>
                                <h4 class="card-title font22">Search Local Sale</h4>
                                <p>Search by local sale details</p>
                            </div>
                            <div class="col-md-7 card p_20 search-filter">
                                <div class="account_field font20 p_10" onclick="searchFilter(); return false;">
                                    <i class="fa fa-filter font20 icon_btn"></i>
                                    <span>Filters</span>
                                </div>
                                <div class="input-containers child2 focus">
                                    <input type="text" class="input form-control" name="search_field" id="search_field" value="">
                                    <label class="small_font" for="search_field">Search by SN# or Driver Name</label>
                                    <span>Search by SN# or Driver Name</span>
                                </div>
                                <div id="show_filter" class="d-none">
                                    <div class="account_field">
                                        <div class="form-group col-md-4 input-containers min_width pr_10 focus">
                                            <input type="date" class="form-control" name="search_start_date" id="search_start_date">
                                            <label class="small_font" for="search_start_date">Start Date</label>
                                            <span>Start Date</span>
                                        </div>
                                        <div class="form-group col-md-4 input-containers min_width pr_10 focus">
                                            <input type="date" class="form-control" name="search_end_date" id="search_end_date">
                                            <label class="small_font" for="search_end_date">End Date</label>
                                            <span>End Date</span>
                                        </div>
                                    </div>
                                    <div class="account_field">
                                        <div class="col-md-4 min_width pr_10">
                                            <label class="small_font" for="tag_buyer">Tag Buyer</label>
                                            <select class="js-example-basic-multiple select2-hidden-accessible custom_dropdown" name="tag_buyer" multiple="" data-select-tag_buyer-id="1" tabindex="-1" style="width:100%" aria-hidden="true" placeholder="Tag Supplier">
                                                <option value="select_all(supplies)" data-select-tag_buyer-id="1">Select All(Buyer)</option>
                                                <option value="customers" data-select-tag_buyer-id="2">Customers</option>
                                                <option value="supplier" data-select-tag_buyer-id="3">Supplier</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 min_width pr_10">
                                            <label class="small_font" for="tag_yard">Tag Yard</label>
                                            <select class="js-example-basic-multiple select2-hidden-accessible custom_dropdown" name="tag_yard" multiple="" data-select-tag_yard-id="1" tabindex="-1" style="width:100%" aria-hidden="true" placeholder="Tag Yard">
                                                <option value="all" data-select-tag_yard-id="1">Select All</option>
                                                <option value="ggs" data-select-tag_yard-id="2">GGS</option>
                                                <option value="test" data-select-tag_yard-id="3">yard test</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 min_width pr_10">
                                            <label class="small_font" for="select_sku">Select SKU</label>
                                            <select class="js-example-basic-multiple select2-hidden-accessible custom_dropdown" name="select_sku" multiple="" data-select-select_sku-id="1" tabindex="-1" style="width:100%" aria-hidden="true" placeholder="Select SKU">
                                                <option value="select_all(supplies)" data-select-select_sku-id="1">Select All(SKU)</option>
                                                <option value="1" data-select-select_sku-id="2">COPPER</option>
                                                <option value="2" data-select-select_sku-id="3">Supplier</option>
                                                <option value="3" data-select-select_sku-id="3">test 1</option>
                                                <option value="4" data-select-select_sku-id="3">test 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="account_field">
                                        <div class="col-md-3 min_width_2 px_5">
                                            <label class="small_font" for="local_sale_status">Local Sale Status</label>
                                            <select class="js-example-basic-multiple select2-hidden-accessible custom_dropdown local_sale_status" name="local_sale_status" multiple="" data-select-local_sale_status-id="" tabindex="-1" style="width:100%" aria-hidden="true" placeholder="Local Sale Status">
                                                <option value="" data-select-local_sale_status-id="">Local Sale Status</option>
                                                <option value="all" data-select-local_sale_status-id="1">All</option>
                                                <option value="current" data-select-local_sale_status-id="2">Current</option>
                                                <option value="completed" data-select-local_sale_status-id="3">Completed</option>
                                                <option value="inactive" data-select-local_sale_status-id="4">Inactive</option>
                                                <option value="exported" data-select-local_sale_status-id="5">Exported</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 min_width_2 px_5">
                                            <label class="small_font" for="sku_type">SKU Type</label>
                                            <select class="js-example-basic-multiple select2-hidden-accessible custom_dropdown" name="sku_type" multiple="" style="width:100%" data-select-sku_type-id="3" tabindex="-1" aria-hidden="true" data-placeholder="SKU Type">
                                                <option value="ferrous" data-select-sku_type-id="1">Ferrous</option>
                                                <option value="non_ferrous" data-select-sku_type-id="2">Non Ferrous</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 min_width_3" style="margin-top: 20px;">
                                            <a href="#" class="form-group col-md-4 btn btn-light custom_btn_resize btn_width">SEARCH</a>
                                            <a href="#" class="form-group col-md-4 btn btn-light custom_btn_resize btn_width">CLOSE</a>
                                            <a href="#" class="form-group col-md-4 btn btn-light custom_btn_resize btn_width">RESET</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="create.php" target="_blank" class="btn btn-primary custom_btn_resize child btn-width">+ CREATE LOCAL SALE</a>
                                <a href="#" class="btn btn-light custom_btn_resize child btn-width"><i class="fa fa-cloud-download-alt"></i>DOWNLOAD LOCAL SALE</a>
                            </div>
                        </div>

                        <div class="col-md-12 grid-margin stretch-card m_15rem purchase-list">
                            <div class="card">
                                <div class="card-body">
                                    <table id="purchase_list" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                        <thead>
                                            <tr>
                                                <th class="text_wrap px_0 sticky_col sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Status</th>
                                                <th class="text_wrap px_0 sticky_col sc_1 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">SN #</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Local Sale Date</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Customer (Buyer)</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Yard</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">SKU Type</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Truck Time</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Gross Weight Kg</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Empty Weight Kg</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Net Weight Kg</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Material Weight Kg</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Bag Weight Kg</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Net Weight Kg</th>
                                                <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Weight Difference Kg</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td class="sticky_col">
                                                    <i class="mdi mdi-pencil"></i>
                                                </td>
                                                <td class="sticky_col sc_1">PGG-FE-000022</td>
                                                <td>11-Oct-2022</td>
                                                <td>AKSHYAA</td>
                                                <td>GGS</td>
                                                <td>ferrous</td>
                                                <td>--</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>171</td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="sticky_col"><i class="mdi mdi-pencil"></i></td>
                                                <td class="sticky_col sc_1">PGG-FE-000023</td>
                                                <td>11-Oct-2022</td>
                                                <td>AKSHYAA</td>
                                                <td>GGS</td>
                                                <td>ferrous</td>
                                                <td>--</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>171</td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="sticky_col"><i class="mdi mdi-pencil"></i></td>
                                                <td class="sticky_col sc_1">PGG-FE-000023</td>
                                                <td>11-Oct-2022</td>
                                                <td>AKSHYAA</td>
                                                <td>GGS</td>
                                                <td>ferrous</td>
                                                <td>--</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>171</td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="sticky_col"><i class="mdi mdi-pencil"></i></td>
                                                <td class="sticky_col sc_1">PGG-FE-000023</td>
                                                <td>11-Oct-2022</td>
                                                <td>AKSHYAA</td>
                                                <td>GGS</td>
                                                <td>ferrous</td>
                                                <td>--</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>171</td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="sticky_col"><i class="mdi mdi-pencil"></i></td>
                                                <td class="sticky_col sc_1">PGG-FE-000023</td>
                                                <td>11-Oct-2022</td>
                                                <td>AKSHYAA</td>
                                                <td>GGS</td>
                                                <td>ferrous</td>
                                                <td>--</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>171</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>171</td>
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
    <?php include "../../extra/bottom_footer.php"; ?>


    <script type="text/javascript">
        $(function() {
            $('#purchase_list').DataTable();
        });

        function searchFilter() {
            $("#show_filter").toggleClass("d-none");
        }


        var result = [];
        var opt;
        $('.purchase_status').on('change', function() {
            alert(this.value);
            var select = this.value;
            var options = select && select.options;

            for (var i = 0, iLen = options.length; i < iLen; i++) {
                opt = options[i];

                if (opt.selected) {
                    result.push(opt.value || opt.text);
                }
            }
            return result;
        });
    </script>
</body>

</html>