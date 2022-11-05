<?php
include '../../frontend_config.php';
include '../../frontend_function.php';
$page_title = "Local Sales Create";
?>
<?php include "../../extra/top_header.php"; ?>
<style type="text/css">

</style>

<body>
   <div class="container-scroller">
      <?php include "../../extra/_navbar.php"; ?>
      <div class="container-fluid page-body-wrapper">
         <?php include "../../extra/_settings-panel.php";?>
         <?php include "../../extra/_sidebar.php";?>
         <div class="main-panel">
            <div class="content-wrapper">
               <div class="m_wrapper">
                  <h3 class="m_0">Create Local Sales</h3>
                  <p class="m_0 c-grey">Enter basic details of Local Sale below. Fields marked * are required to fill.</p>
               </div>
               <div class="progressbarclass">
                  <ul role="tablist">s
                     <li role="tab" class="complete">
                        <a href="javascript:">
                           <span style="color: rgb(35, 60, 101);">PN #:</span> Pip-NF-000001 
                        </a>
                     </li>
                     <li role="tab" class="current">
                        <a href="javascript:">
                           <span class="number">1.</span> Current
                        </a>
                     </li>
                     <li role="tab" class="inactive">
                        <a href="javascript:">
                           <span class="number">2.</span> Completed
                        </a>
                     </li>
                     <li role="tab" class="inactive">
                        <a href="javascript:">
                           <span class="number">3.</span> Exported
                        </a>
                     </li>
                  </ul>
               </div>

               <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
                  <div class="cd-h-timeline__container container timeline_css">
                     <div class="cd-h-timeline__dates">
                        <div class="cd-h-timeline__line">
                           <ol>
                              <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">Basic Details</a></li>
                              <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">Item</a></li>
                              <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">Empty Truck</a></li>
                              <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">Accounts</a></li>
                              <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">History</a></li>
                           </ol>
                           <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                        </div>
                        <!-- .cd-h-timeline__line -->
                     </div>
                     <!-- .cd-h-timeline__dates -->
                     <ul>
                        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next cd-h-timeline__navigation--inactive">Next</a></li>
                     </ul>
                  </div>
                  <!-- .cd-h-timeline__container -->
                  <div class="cd-h-timeline__events purchase">
                     <ol>
                        <!-- tab 1 -------------------------------------------------------------- -->
                        <!-- cd-h-timeline__event--selected -->
                        <li class="cd-h-timeline__event text-component cd-h-timeline__event--selected">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <h4 class="card-title">Supplier and yard details</h4>
                                       <form class="form-sample" id="myForm_1" name="myForm_1  ">
                                          <div class="row">
                                             <div class="col-4 col-md-3">
                                                <select name="tag_customer" class="form-control js-example-basic-single w-100" id="tag_customer">
                                                   <option value="">Tag Customer</option>
                                                   <option value="mayur">Mayur</option>
                                                   <option value="mayur">Mayur</option>
                                                   <option value="test">Test</option>
                                                </select>
                                             </div>
                                             <div class="col-3 col-md-3 mt_10">
                                                <a href="#" id="add_stakeholder" class="form-control btn btn-primary" style="width: fit-content;" onclick="getData(); return false;" id="save_btn" >+ Add Stakeholder</a>
                                             </div>
                                             <div class="col-3 col-md-3">
                                                <select name="tag_yard" class="form-control js-example-basic-single w-100" onchange="getYards()" id="tag_yard">
                                                   <option value="">Tag Yard</option>
                                                   <option value="GGS">GGS</option>
                                                   <option value="test">Test</option>
                                                </select>
                                             </div>
                                             <div class="col-3 col-md-3">
                                                <select name="sku_type" class="form-control js-example-basic-single w-100" id="sku_type">
                                                   <option value="">Select SKU Type</option>
                                                   <option value="ferrous">Ferrous</option>
                                                   <option value="non_ferrous">Non Ferrous</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="input-containers col-4 col-md-3">
                                                <input type="text" class="input form-control" name="name" id="name">
                                                <label for="name">Name</label>
                                                <span>Name</span>
                                             </div>
                                             <div class="col-4 col-md-3">
                                                <select name="country_code" class="form-control js-example-basic-single w-100" id="country_code">
                                                   <option value="">Country Code</option>
                                                   <option value="91">+91</option>
                                                   <option value="92">+92</option>
                                                </select>
                                             </div>
                                             <div class="input-containers col-4 col-md-3">
                                                <input type="text" class="input form-control" name="phone" id="phone">
                                                <label for="phone">Phone</label>
                                                <span>Phone</span>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="input-containers col-4 col-md-3">
                                                <input type="text" class="input form-control" name="truck_number" id="truck_number">
                                                <label for="truck_number">Truck Number</label>
                                                <span>Truck Number</span>
                                             </div>
                                             <div class="input-containers col-4 col-md-3">
                                                <input type="text" class="input form-control" name="delivery_note" id="delivery_note">
                                                <label for="delivery_note">Delivery note</label>
                                                <span>Delivery note</span>
                                             </div>
                                             <div class="input-containers col-4 col-md-3 focus">
                                                <input type="date" class="form-control" name="delivery_note_date" id="delivery_note_date">
                                                <label for="delivery_note_date">Delivery Note Date</label>
                                                <span>Delivery Note Date</span>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="row">
                                                   <div class="col-6 col-md-6 input_box_width">
                                                      <select name="id_doc" class="form-control js-example-basic-single w-100" id="id_doc">
                                                         <option value="">Identity Document Type</option>
                                                         <option value="passport">Passport</option>
                                                         <option value="Licence">Licence</option>
                                                      </select>
                                                   </div>
                                                   <div class="input-containers col-6 col-md-6 input_box_width">
                                                      <input type="text" class="input form-control" name="represtative_id_no" id="represtative_id_no">
                                                      <label for="represtative_id_no">Represtative ID number</label>
                                                      <span>Represtative ID number</span>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="input-containers col-7 col-md-7 input_box_width_60">
                                                      <textarea rows="5" cols="30" class="input form-control textclass" id="remark" name="remark"></textarea>
                                                      <label for="delivery_note_date">Remark</label>
                                                      <span>Remark</span>
                                                   </div>
                                                   <div class="col-5 col-md-5 input_box_width_40">
                                                      <select name="only_weighbridge" class="form-control js-example-basic-single w-100" id="only_weighbridge">
                                                         <option value="">Only Weighbridge</option>
                                                         <option value="yes">Yes</option>
                                                         <option value="No">No</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="row" style="border: 1px solid #090c12;">
                                                   <div class="col-md-6">
                                                      <div class="input-containers col-12 col-md-12 focus">
                                                         <input type="text" class="input form-control" name="truck_in_time" id="truck_in_time" disabled="disabled" >
                                                         <label for="truck_in_time">Truck in Time</label>
                                                         <span>Truck in Time</span>
                                                      </div>
                                                      <div class="input-containers col-12 col-md-12 focus">
                                                         <input type="text" class="input form-control" name="truck_out_time" id="truck_out_time" disabled="disabled" >
                                                         <label for="truck_out_time">Truck out Time</label>
                                                         <span>Truck out Time</span>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="input-containers col-12 col-md-12 focus">
                                                         <input type="text" class="input form-control" name="total_truck_time" id="total_truck_time" disabled="disabled" >
                                                         <label for="total_truck_time">Total Truck Time</label>
                                                         <span>Total Truck Time</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row" id="scale_col">
                                             <p>Scale</p>
                                             <div class="form-group col-3 col-md-3">
                                                <select name="scale_name" class="form-control js-example-basic-single w-100" id="scale_name">
                                                   <option value="">Select Yard & scale</option>
                                                   <option value="out1">Scale 1</option>
                                                   <option value="out2">Scale 2</option>
                                                </select>
                                             </div>
                                             <div class="form-group col-3 col-md-3 group_fields">
                                                <div class="input-containers focus">
                                                   <input type="text" class="input form-control" name="scale_reading" value="0" id="scale_reading" disabled="disabled" >
                                                   <label for="scale_reading">Scale Reading</label>
                                                   <span>Scale Reading</span>
                                                </div>
                                                <div class="form-group icon_bttn">
                                                   <a href="#" id="add_scale"><i class="fa fa-plus"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          <p>Weighbridge</p>
                                          <div class="row">
                                             <div class="col-md-7">
                                                <div class="row">
                                                   <div class="col-6 col-md-5 group_fields">
                                                      <div class="input-containers input_box_width_1 focus">
                                                         <input type="text" class="input form-control" name="truck_gross_weight" id="truck_gross_weight" value="0" disabled="disabled" >
                                                         <label for="truck_gross_weight">Truck Gross Weight</label>
                                                         <span>Truck Gross Weight</span>
                                                      </div>
                                                      <div class="icon_bttn">
                                                         <a href="#"><i class="ti-pencil"></i></a>
                                                      </div>
                                                   </div>
                                                   <div class="input-containers col-3 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="truck_tare_weight" id="truck_tare_weight" value="0" disabled="disabled" >
                                                      <label for="truck_tare_weight">Truck Tare Weight</label>
                                                      <span>Truck Tare Weight</span>
                                                   </div>
                                                   <div class="input-containers col-3 col-md-3 focus">
                                                      <input type="text" class="input form-control" name="truck_net_weight" id="truck_net_weight" value="0" disabled="disabled" >
                                                      <label for="truck_net_weight">Truck Net Weight</label>
                                                      <span>Truck Net Weight</span>
                                                   </div>
                                                   <div class="input-containers col-4 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="truck_material_weight" id="truck_material_weight" value="0" disabled="disabled" >
                                                      <label for="truck_material_weight">Total Material Weight</label>
                                                      <span>Total Material Weight</span>
                                                   </div>
                                                   <div class="input-containers col-4 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="total_bag_weight" id="total_bag_weight" value="0" disabled="disabled" >
                                                      <label for="total_bag_weight">Total Bag Weight</label>
                                                      <span>Total Bag Weight</span>
                                                   </div>
                                                   <div class="input-containers col-4 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="total_net_weight" id="total_net_weight" value="0" disabled="disabled" >
                                                      <label for="total_net_weight">Total Net Weight</label>
                                                      <span>Total Net Weight</span>
                                                   </div>
                                                   <div class="input-containers col-4 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="total_returns_weight" id="total_returns_weight" value="0" disabled="disabled" >
                                                      <label for="total_returns_weight">Total Returns Weight</label>
                                                      <span>Total Returns Weight</span>
                                                   </div>
                                                   <div class="input-containers col-4 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="total_waste_weight" id="total_waste_weight" value="0" disabled="disabled" >
                                                      <label for="total_waste_weight">Total Waste Weight</label>
                                                      <span>Total Waste Weight</span>
                                                   </div>
                                                   <div class="input-containers col-4 col-md-4 focus">
                                                      <input type="text" class="input form-control" name="weight_difference" id="weight_difference" value="0" disabled="disabled" >
                                                      <label for="weight_difference">Weight Difference</label>
                                                      <span>Weight Difference</span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-5">
                                                <div class="form-group ">
                                                   <label for="file_upload">File Upload</label>
                                                   <input type="file" class="form-control" name="item_img" id="item_img">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12" style="text-align: center;">
                                                <a href="#" onclick="getData(); return false;" id="save_btn" class="btn btn-primary custom_btn_resize">Save</a>
                                                <a href="#" class="btn btn-secondary custom_btn_resize">Continue</a>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- tab 2 -------------------------------------------------------------- -->
                        <li class="cd-h-timeline__event text-component">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <!-- <h4 class="card-title">Items</h4> -->
                                       <form class="form-sample" id="myForm_2" name="myForm_2">
                                          <div class="row">
                                             <div class="">
                                                <input type="button" class="custom_btn" value="ADD PRODUCT ITEM GROUP">
                                                <input type="button" class="custom_btn" value="ADD PRODUCT RETURN GROUP">
                                                <input type="button" class="custom_btn btn-inverse-primary" value="+ CREATE SKU">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <!-- Item Group -->
                                             <div class="col-12 col-md-5 item-group">
                                                <h5>Item Groups</h5>
                                                <div class="item-box">
                                                   <table class="table table-light">
                                                      <thead>
                                                         <tr>
                                                            <th>Type</th>
                                                            <th>SKU</th>
                                                            <th class="text_wrap">Material Weight<br>0 KG</th>
                                                            <th class="text_wrap">Bag Weight <br>0 KG</th>
                                                            <th class="text_wrap">Waste Weight <br>0 KG</th>
                                                            <th class="text_wrap">Net Weight <br>0 KG</th>
                                                            <th class="text_wrap">Delete</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td>
                                                               <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                  <option value="">Select SKU</option>
                                                                  <option value="mayur">Copper Grade 1 <span class="sku_unit"> - unit</span></option>
                                                                  <option value="mayur">ALUMINIUM  <span class="sku_unit"> - metric ton</span></option>
                                                                  <option value="test">Ali 1000 series  <span class="sku_unit"> - kilogram</span></option>
                                                               </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td >
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Return</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Copper Grade 1 <span class="sku_unit"> - unit</span></option>
                                                                     <option value="mayur">ALUMINIUM  <span class="sku_unit"> - metric ton</span></option>
                                                                     <option value="test">Ali 1000 series  <span class="sku_unit"> - kilogram</span></option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td >
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Return</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Copper Grade 1 <span class="sku_unit"> - unit</span></option>
                                                                     <option value="mayur">ALUMINIUM  <span class="sku_unit"> - metric ton</span></option>
                                                                     <option value="test">Ali 1000 series  <span class="sku_unit"> - kilogram</span></option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td >
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Return</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Copper Grade 1 <span class="sku_unit"> - unit</span></option>
                                                                     <option value="mayur">ALUMINIUM  <span class="sku_unit"> - metric ton</span></option>
                                                                     <option value="test">Ali 1000 series  <span class="sku_unit"> - kilogram</span></option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Item</td>
                                                            <td >
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                         <tr>
                                                            <td>Return</td>
                                                            <td>
                                                                  <select name="select_sku" class="form-control js-example-basic-single custom_dropdown" id="">
                                                                     <option value="">Select SKU</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="mayur">Mayur</option>
                                                                     <option value="test">Test</option>
                                                                  </select>
                                                            </td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <!-- Items in Group Data -->
                                             <div class="col-12 col-md-7 item-group">
                                                   <h5>Items in Group : 1</h5>
                                                   <div class="item-box">
                                                      <table class="table table-light">
                                                         <thead>
                                                            <tr>
                                                               <th class="item_col drop">Scale</th>
                                                               <th class="item_wt text_wrap">Material Wt.(KG)<br>0 KG</th>
                                                               <th class="item_wt text_wrap">Bag Wt.(KG)<br>0 KG</th>
                                                               <th class="item_wt text_wrap">Waste Wt.(KG)<br>0 KG</th>
                                                               <th class="item_wt text_wrap">Net Wt.(KG)<br>0 KG</th>
                                                               <th>Photos</th>
                                                               <th class="text_wrap">Manual Edit</th>
                                                               <th>Remove</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>
                                                                  <div class="row scale_read">
                                                                     <select name="select_sku" class="col-md-5 js-example-basic-single custom_dropdown p_10" id="select_sku_item">
                                                                        <option value="">Scale Name</option>
                                                                        <option value="mayur">Mayur</option>
                                                                        <option value="mayur">Mayur</option>
                                                                        <option value="test">Test</option>
                                                                     </select>
                                                                     <div class="col-md-2 input-containers px_0 mt_18 input_field focus kg">
                                                                        <input type="text" class="input form-control" name="scale_reading" id="scale_reading" value="0" disabled>
                                                                        <label for="scale_reading">Scale Reading</label>
                                                                     </div>
                                                                     <div class="col-md-1 p_10 icon_bttn_item">
                                                                        <a href="#" id="add_scale_item"><i class="fa fa-plus"></i></a>
                                                                     </div>
                                                                  </div>
                                                               </td>
                                                               <td><input type="text" class="form-control weight_col" name="material_wt" id="material_wt" value="0" disabled></td>
                                                               <td><input type="text" class="form-control weight_col" name="bag_wt" id="bag_wt" value="0"></td>
                                                               <td><input type="text" class="form-control weight_col" name="waste_wt" id="waste_wt" value="0"></td>
                                                               <td><input type="text" class="form-control weight_col" name="net_wt" id="net_wt" value="0" disabled></td>
                                                               <td><a href="#"><i class="fa fa-images"></i></a></td>
                                                               <td><a href="#"><i class="fa fa-pencil-alt"></i></a></td>
                                                               <td><a href="#"><i class="fa fa-trash-alt"></i></a></td> 
                                                            </tr>
                                                            
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <input type="button" class="btn-light custom_btn" value="+ Add More">
                                             </div>
                                          </div>

                                          <div class="row">
                                             <div class="col-md-12" style="text-align: center;">
                                                <a href="#" class="btn btn-primary custom_btn_resize">Save</a>
                                                <a href="#" class="btn btn-light custom_btn_resize">Back</a>
                                                <a href="#" class="btn btn-secondary custom_btn_resize">Continue</a>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- tab 3 -------------------------------------------------------------- -->
                        <li class="cd-h-timeline__event text-component">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <!-- <h4 class="card-title">Items</h4> -->
                                       <form class="form-sample" id="myForm_3" name="myForm_3">
                                          <div class="row">
                                             <p>Scale</p>
                                             <div class="form-group col-3 col-md-3">
                                                <select name="scale_name" class="form-control js-example-basic-single w-100">
                                                   <option value="">Scale Name</option>
                                                   <option value="out1">Scale 1</option>
                                                   <option value="out2">Scale 2</option>
                                                </select>
                                             </div>
                                             <div class="form-group col-3 col-md-3 group_fields">
                                                <div class="input-containers focus">
                                                   <input type="text" class="input form-control" name="scale_reading" value="0" id="scale_reading" disabled="disabled" >
                                                   <label for="scale_reading">Scale Reading</label>
                                                   <span>Scale Reading</span>
                                                </div>
                                                <div class="form-group icon_bttn">
                                                   <a href="#" id="add_scale_truck"><i class="fa fa-plus"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <p>Weighbridge</p>
                                             <div class="col-md-5">
                                                <div class="col-12 col-md-7 group_fields">
                                                   <div class="input-containers focus">
                                                      <input type="text" class="input form-control" name="empty_truck_weight" id="empty_truck_weight" value="0" disabled="disabled" >
                                                      <label for="empty_truck_weight">Empty Truck Weight</label>
                                                      <span>Empty Truck Weight</span>
                                                   </div>
                                                   <div class="form-group icon_bttn">
                                                      <a href="#"><i class="ti-pencil"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-7">
                                                <div class="form-group ">
                                                   <label for="file_upload">File Upload</label>
                                                   <input type="file" class="form-control" name="item_img_3" id="item_img_3">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12" style="text-align: center;">
                                                <a href="#" class="btn btn-primary custom_btn_resize">Save</a>
                                                <a href="#" class="btn btn-light custom_btn_resize">Back</a>
                                                <a href="#" class="btn btn-secondary custom_btn_resize">Continue</a>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- tab 4 -------------------------------------------------------------- -->
                        <li class="cd-h-timeline__event text-component">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <!-- <h4 class="card-title">Items</h4> -->
                                       <form class="form-sample" id="myForm_4" name="myForm_4">
                                          <div class="row account_field">
                                             <div class="col-md-2 form-group">
                                                <select name="tag_customers" class="form-control js-example-basic-single w-100" id="amount_type">
                                                   <option value="">Amount is</option>
                                                   <option value="inclusive">Inclusive of Tax</option>
                                                   <option value="exclusive">Exclusive of tax</option>
                                                </select>
                                             </div>
                                             <div class="form-group child">
                                                <div class="switch">
                                                   <label>
                                                      <input type="checkbox"show_detail id="show_detail">
                                                      <span class="lever"></span>Show Details
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="input-containers child2 focus">
                                                <input type="text" class="input form-control" name="tax" id="tax" value="10" disabled>
                                                <label for="tax">Total Amount</label>
                                                <span>Total Amount</span>
                                             </div>
                                             <a href="#" class="btn btn-success custom_btn_resize child btn_h text_wrap">MARK AS COMPLETED</a>
                                             <a href="#" class="btn btn-light custom_btn_resize child btn_h text_wrap">MARK AS INACTIVE</a>

                                             <div class="input-containers child2 input_field focus r c-red">
                                                <input type="text" class="input form-control" name="total_net_amount" id="total_net_amount" value="0" disabled>
                                                <label for="total_net_amount">Total Net Amount</label>
                                                <span>Total Net Amount</span>
                                             </div>
                                             <div class="input-containers child2 input_field focus r c-blue">
                                                <input type="text" class="input form-control" name="total_tax_amount" id="total_tax_amount" value="0" disabled>
                                                <label for="total_tax_amount">Total Tax Amount</label>
                                                <span>Total Tax Amount</span>
                                             </div>
                                             <div class="input-containers child2 input_field focus r c-green">
                                                <input type="text" class="input form-control" name="total_amount" id="total_amount" value="0" disabled>
                                                <label for="total_amount">Total Amount</label>
                                                <span>Total Amount</span>
                                             </div>
                                          </div>
                                          <div id="account_single" class="row account_field">
                                             <p>Item Group #1(item)</p>
                                             <div class="col-md-2 form-group">
                                                <select name="tag_customers" class="form-control js-example-basic-single w-100" id="amount_type">
                                                   <option value="">Select SKU</option>
                                                   <option value="inclusive">Inclusive of Tax</option>
                                                   <option value="exclusive">Exclusive of tax</option>
                                                </select>
                                             </div>
                                             <div class="input-containers child4 focus">
                                                <input type="text" class="input form-control" name="rate_kg" id="rate_kg" value="15" disabled>
                                                <label for="rate_kg">Rate/KG</label>
                                                <span>Rate/KG</span>
                                             </div>
                                             <div class="input-containers child input_field focus kg">
                                                <input type="text" class="input form-control" name="material_weight" id="material_weight" value="0" disabled>
                                                <label for="total_net_amount">Material Weight</label>
                                                <span>Material Weight</span>
                                             </div>
                                             <div class="input-containers child input_field focus kg">
                                                <input type="text" class="input form-control" name="bag_weight" id="bag_weight" value="0" disabled>
                                                <label for="bag_weight">Bag Weight</label>
                                                <span>Bag Weight</span>
                                             </div>
                                             <div class="input-containers child3 input_field focus kg">
                                                <input type="text" class="input form-control" name="waste_weight" id="waste_weight" value="0" disabled>
                                                <label for="waste_weight">Waste Weight</label>
                                                <span>Waste Weight</span>
                                             </div>
                                             <div class="input-containers child input_field focus kg">
                                                <input type="text" class="input form-control" name="net_weight" id="net_weight" value="0" disabled>
                                                <label for="net_weight">Net Weight</label>
                                                <span>Net Weight</span>
                                             </div>
                                             <div class="input-containers child input_field focus r c-red">
                                                <input type="text" class="input form-control" name="net_amount" id="net_amount" value="0" disabled>
                                                <label for="net_amount">Net Amount</label>
                                                <span>Net Amount</span>
                                             </div><div class="input-containers child input_field focus r c-blue">
                                                <input type="text" class="input form-control" name="tax_amount" id="tax_amount" value="0" disabled>
                                                <label for="tax_amount">Tax Amount</label>
                                                <span>Tax Amount</span>
                                             </div>
                                             <div class="input-containers child4 input_field focus r c-green">
                                                <input type="text" class="input form-control" name="amount" id="amount" value="0" disabled>
                                                <label for="amount">Amount</label>
                                                <span>Amount</span>
                                             </div>
                                          </div>
                                          <div id="account_group" class="groups">
                                             <hr>
                                             <p>Group : 1</p>
                                             <div class="row account_field">
                                                <div class="col-md-2 form-group">
                                                   <select name="tag_customers" class="form-control js-example-basic-single w-100" id="amount_type_1">
                                                      <option value="">Select SKU</option>
                                                      <option value="inclusive">Inclusive of Tax</option>
                                                      <option value="exclusive">Exclusive of tax</option>
                                                   </select>
                                                </div>
                                                <div class="input-containers child4 focus">
                                                   <input type="text" class="input form-control" name="rate_kg" id="rate_kg_1" value="15" disabled>
                                                   <label for="rate_kg">Rate/KG</label>
                                                   <span>Rate/KG</span>
                                                </div>
                                                <div class="input-containers child input_field focus kg">
                                                   <input type="text" class="input form-control" name="material_weight" id="material_weight_1" value="0" disabled>
                                                   <label for="total_net_amount">Material Weight</label>
                                                   <span>Material Weight</span>
                                                </div>
                                                <div class="input-containers child input_field focus kg">
                                                   <input type="text" class="input form-control" name="bag_weight" id="bag_weight_1" value="0" disabled>
                                                   <label for="bag_weight">Bag Weight</label>
                                                   <span>Bag Weight</span>
                                                </div>
                                                <div class="input-containers child3 input_field focus kg">
                                                   <input type="text" class="input form-control" name="waste_weight" id="waste_weight_1" value="0" disabled>
                                                   <label for="waste_weight">Waste Weight</label>
                                                   <span>Waste Weight</span>
                                                </div>
                                                <div class="input-containers child input_field focus kg">
                                                   <input type="text" class="input form-control" name="net_weight" id="net_weight_1" value="0" disabled>
                                                   <label for="net_weight">Net Weight</label>
                                                   <span>Net Weight</span>
                                                </div>
                                                <div class="input-containers child input_field focus r c-red">
                                                   <input type="text" class="input form-control" name="net_amount" id="net_amount_1" value="0" disabled>
                                                   <label for="net_amount">Net Amount</label>
                                                   <span>Net Amount</span>
                                                </div><div class="input-containers child input_field focus r c-blue">
                                                   <input type="text" class="input form-control" name="tax_amount" id="tax_amount_1" value="0" disabled>
                                                   <label for="tax_amount">Tax Amount</label>
                                                   <span>Tax Amount</span>
                                                </div>
                                                <div class="input-containers child4 input_field focus r c-green">
                                                   <input type="text" class="input form-control" name="amount" id="amount_1" value="0" disabled>
                                                   <label for="amount">Amount</label>
                                                   <span>Amount</span>
                                                </div>
                                             </div>
                                             <div class="row account_field">
                                                <div class="col-md-2 form-group">
                                                   <select name="tag_customers" class="form-control js-example-basic-single w-100" id="amount_type_2">
                                                      <option value="">Select SKU</option>
                                                      <option value="inclusive">Inclusive of Tax</option>
                                                      <option value="exclusive">Exclusive of tax</option>
                                                   </select>
                                                </div>
                                                <div class="input-containers child4 focus">
                                                   <input type="text" class="input form-control" name="rate_kg" id="rate_kg_2" value="15" disabled>
                                                   <label for="rate_kg">Rate/KG</label>
                                                   <span>Rate/KG</span>
                                                </div>
                                                <div class="input-containers child input_field focus kg">
                                                   <input type="text" class="input form-control" name="material_weight" id="material_weight_2" value="0" disabled>
                                                   <label for="total_net_amount">Material Weight</label>
                                                   <span>Material Weight</span>
                                                </div>
                                                <div class="input-containers child input_field focus kg">
                                                   <input type="text" class="input form-control" name="bag_weight" id="bag_weight_2" value="0" disabled>
                                                   <label for="bag_weight">Bag Weight</label>
                                                   <span>Bag Weight</span>
                                                </div>
                                                <div class="input-containers child3 input_field focus kg">
                                                   <input type="text" class="input form-control" name="waste_weight" id="waste_weight_2" value="0" disabled>
                                                   <label for="waste_weight">Waste Weight</label>
                                                   <span>Waste Weight</span>
                                                </div>
                                                <div class="input-containers child input_field focus kg">
                                                   <input type="text" class="input form-control" name="net_weight" id="net_weight_2" value="0" disabled>
                                                   <label for="net_weight">Net Weight</label>
                                                   <span>Net Weight</span>
                                                </div>
                                                <div class="input-containers child input_field focus r c-red">
                                                   <input type="text" class="input form-control" name="net_amount" id="net_amount_2" value="0" disabled>
                                                   <label for="net_amount">Net Amount</label>
                                                   <span>Net Amount</span>
                                                </div><div class="input-containers child input_field focus r c-blue">
                                                   <input type="text" class="input form-control" name="tax_amount" id="tax_amount_2" value="0" disabled>
                                                   <label for="tax_amount">Tax Amount</label>
                                                   <span>Tax Amount</span>
                                                </div>
                                                <div class="input-containers child4 input_field focus r c-green">
                                                   <input type="text" class="input form-control" name="amount" id="amount_2" value="0" disabled>
                                                   <label for="amount">Amount</label>
                                                   <span>Amount</span>
                                                </div>
                                             </div>
                                          </div>


                                          <div class="row">
                                             <div class="col-md-12" style="text-align: center;">
                                                <a href="#" class="btn btn-primary custom_btn_resize">Save</a>
                                                <a href="#" class="btn btn-light custom_btn_resize">Back</a>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <!-- tab 5 -------------------------------------------------------------- -->
                        <li class="cd-h-timeline__event text-component">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <!-- <h4 class="card-title">Items</h4> -->
                                       <form class="form-sample" id="myForm_5" name="myForm_5">
                                          <div class="row">
                                             <div class="">
                                                <input type="button" class="btn btn-primary" onclick="showHistory()" value="FETCH HISTORY">

                                                <div id="history_table" class="col-md-12 grid-margin stretch-card m_15rem history-list ">
                                                   <div class="card">
                                                      <div class="card-body">
                                                            <table id="history_list" class="table dataTable no-footer" aria-describedby="order-listing_info">
                                                               <thead>
                                                                  <tr>
                                                                     <th class="text_wrap px_0 sticky_col sorting sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">PN #</th>
                                                                     <th class="text_wrap px_0 sticky_col sc_1 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Status</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Purchase  Date</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Customer (Supplier)</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Yard</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">SKU Type</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">SKU Name</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Final Weight</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Scale Value</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Tare Weight</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Waste Weight</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck In Time</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Out Time</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Gross Weight Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Tare Weight Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Net Weight Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Material Weight Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Bag Weight Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Total Net Weight Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Weight Difference Kg</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Delivery Note</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Delivery Note Date</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Identity Document Type</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Identity Number</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Driver Name</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Driver Phone Number</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Remark</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Truck Number</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Only WeighBridge</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Device</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Updated By</th>
                                                                     <th class="text_wrap px_0 sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">Updated On</th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  <tr class="odd">
                                                                        <td class="sticky_col">PGG-FE-000022</td>
                                                                        <td class="sticky_col sc_1">Status</td>
                                                                        <td>11-Oct-2022</td>
                                                                        <td>AKSHYAA</td>
                                                                        <td>Customer (Supplier)</td>
                                                                        <td>Yard</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-12" style="text-align: center;">
                                                <a href="#" class="btn btn-light custom_btn_resize">Back</a>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ol>
                  </div>
                  <!-- .cd-h-timeline__events -->

                  <div class="row">
                     <div class="col-md-12">
                        <p class="creater">
                           <span>Created By: Yatin Kanekar</span>
                           <span>Created on: 25 October 2022, 13:29:51</span>
                        </p>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
   <?php include "../../extra/bottom_footer.php"; ?>

      <script>

         var tag_customer = '';
         var tag_yard = '';
         var sku_type = '';
         var name = '';
         var country_code = '';
         var phone = '';
         var truck_number = '';
         var delivery_note = '';
         var delivery_note_date = '';
         var delivery_note = '';
         var represtative_id_no = '';
         var truck_in_time = '';
         var truck_out_time = '';
         var total_truck_time = '';
         var remark = '';
         var only_weighbridge = '';
         var truck_gross_weight = document.getElementById("truck_gross_weight");
         var truck_tare_weight = document.getElementById("truck_tare_weight");
         var item_img = document.getElementById("item_img");
         var truck_net_weight = document.getElementById("truck_net_weight");
         var truck_material_weight = document.getElementById("truck_material_weight");
         var total_bag_weight = document.getElementById("total_bag_weight");
         var total_net_weight = document.getElementById("total_net_weight");
         var total_returns_weight = document.getElementById("total_returns_weight");
         var total_waste_weight = document.getElementById("total_waste_weight");
         var weight_difference = document.getElementById("weight_difference");

         var scale_type;

         var scale_col = document.getElementById('scale_col');
         var userData = [];

         document.getElementById("add_scale").addEventListener("click", addScale);


         // on load
         $(function() {
            $("#account_group").hide();
            $('#history_list').DataTable();

            scale_col.style.display = "none";
         });
         
         // -------------------------------------Create Section-------------------------------------
         function getYards() { 
            tag_yard = $("#tag_yard").val();
            // console.log(tag_yard);
            scale_type = '';

            if (tag_yard=='GGS') {
               scale_col.style.display = "flex";
            } else {
               scale_col.style.display = "none";
            }
         }

         function addScale() {
            
         }

         $('#scale_name').on('change', function() {
            scale_type = this.value;
         });

         function getData() {
            tag_customer = $("#tag_customer").val();
            sku_type = $("#sku_type").val();
            name = $("#name").val();
            country_code = $("#country_code").val();
            phone = $("#phone").val();
            truck_number = $("#truck_number").val();
            delivery_note = $("#delivery_note").val();
            delivery_note_date = $("#delivery_note_date").val();
            represtative_id_no = $("#represtative_id_no").val();
            truck_in_time = $("#truck_in_time").val();
            truck_out_time = $("#truck_out_time").val();
            total_truck_time = $("#total_truck_time").val();
            remark = $("#remark").val();
            only_weighbridge = $("#only_weighbridge").val();


            userData = {
               tag_customer: tag_customer,
               sku_type: sku_type,
               name: name,
               country_code: country_code,
               phone: phone,
               scale_type: scale_type,
               truck_number: truck_number,
               delivery_note: delivery_note,
               delivery_note_date: delivery_note_date,
               represtative_id_no: represtative_id_no,
               truck_in_time: truck_in_time,
               truck_out_time: truck_out_time,
               total_truck_time: total_truck_time,
               remark: remark,
               only_weighbridge: only_weighbridge
            }


            console.log(userData);

         }

         // -------------------------------------Items Section-------------------------------------
         // -------------------------------------Empty Truck Section-------------------------------------
         // -------------------------------------Account Section-------------------------------------
         var switchStatus = false;
         $("#show_detail").on('change', function() {
            if ($(this).is(':checked')) {
               switchStatus = $(this).is(':checked'); // true
               $("#account_single").hide();
               $("#account_group").show();
            } else {
               switchStatus = $(this).is(':checked'); // false
               $("#account_single").show();
               $("#account_group").hide();
            }
         });

         // -------------------------------------History Section-------------------------------------
         function showHistory() {
            $("#history_table").removeClass("d-none");
         }      

      </script>
</body>

</html>