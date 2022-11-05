
<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <div class="me-3 text-center">
         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
         </button>
      </div>
      <li class="nav-item">
         <div class="organisationLogo">
            <img src="<?php echo $backend_links['site_url']; ?>/images/logo/logo.jpg" alt="" height="80" width="160">
            <h5><?php echo $orgnaisation_sideMenu_name;?></h5>
         </div>

         <a class="nav-link" data-bs-toggle="collapse" href="#dashboard" aria-expanded="false" aria-controls="form-elements">
            <span class="menu-title">Dashboard</span>
            <i class="menu-arrow"></i>
         </a>

         <div class="collapse" id="dashboard">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/dashboard/basic.php');">
                     <span class="menu-title">Basic</span>
                  </a>
               </li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/dashboard/advanced.php');">
                     <span class="menu-title">Advanced</span>
                  </a>
               </li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/dashboard/notification.php');">
                     <span class="menu-title">Notifications</span>
                  </a></li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/dashboard/reports.php');">
                     <span class="menu-title">Reports</span>
                  </a>
               </li>

            </ul>
         </div>
      </li>

      <?php
         if(checkuseraccess($permission_array,'purchase','menu'))
         {
      ?>
         <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Purchase" aria-expanded="false" aria-controls="form-elements">
               <span class="menu-title">Purchase</span>
               <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Purchase">
               <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/purchase/index.php');">
                        <span class="menu-title">Local Purchase</span>
                     </a></li>
               </ul>
            </div>
         </li>
      <?php 
         }
      ?>
      <!-- <li class="nav-item">
         <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/organization/organization.php');">
            <span class="menu-title">Purchase Process</span>
         </a>
      </li> -->
      <!-- <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#Sale" aria-expanded="false" aria-controls="form-elements">
            <span class="menu-title">Sales</span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="Sales">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/sales/index.php');">
                     <span class="menu-title">Local Sale</span>
                  </a></li>
            </ul>
         </div>
      </li>
      <!-- <li class="nav-item">
         <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/organization/organization.php');">
            <span class="menu-title">Purchase Process</span>
         </a>
      </li> -->

      <!-- <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#export-sales" aria-expanded="false" aria-controls="form-elements">
            <span class="menu-title">Exports Sales</span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="export-sales">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="javascript:;">
                     <span class="menu-title">Contracts</span>
                  </a></li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;">
                     <span class="menu-title">Bookings</span>
                  </a></li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;">
                     <span class="menu-title">Inquiries</span>
                  </a>
               </li>
            </ul>
         </div>
      </li> -->
      <!-- <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#Inventory" aria-expanded="false" aria-controls="form-elements">
            <span class="menu-title">Inventory</span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="Inventory">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="javascript:;">
                     <span class="menu-title">Item List</span>
                  </a></li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;">
                     <span class="menu-title">Item Stock</span>
                  </a></li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;">
                     <span class="menu-title">Transactions</span>
                  </a>
               </li>
            </ul>
         </div>
      </li> -->
      <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#Masters" aria-expanded="false" aria-controls="form-elements">
            <span class="menu-title">Masters</span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="Masters">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item">
                  <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/stakeholders/stakeholder_list.php');">
                     <span class="menu-title">Stakeholders</span>
                  </a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/employee/employee_list.php');">
                     <span class="menu-title">Employee</span>
                  </a>
               </li>
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/masters/list.php');">
                     <span class="menu-title">Master</span>
                  </a>
               </li>
            </ul>
         </div>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">

            <span class="menu-title">Admin</span>
            <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/role/role_list.php');">
                     <span class="menu-title">Role</span>
                  </a></li>
               <?php
                  if(checkuseraccess($permission_array,'sites','menu'))
                  {
               ?>
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/yard/yard_list.php');">
                     <span class="menu-title">Yard</span>
                  </a></li>
               <?php
                  }
                  if(checkuseraccess($permission_array,'organization','menu'))
                  {
               ?>
               <li class="nav-item"> <a class="nav-link" href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/organization/organization.php');"> <span class="menu-title">Organisation</span>
                  </a> </li>
               <?php 
                  }
               ?>
            </ul>
         </div>
      </li>



      <li class="nav-item">
         <a class="nav-link" href="javascript:;">

            <span class="menu-title">About</span>
         </a>
      </li>


      <li class="nav-item online">
         <a class="nav-link pe-none" href="javascript:;">
            <span class="menu-title">Yatin</span>
            <a href="javascript:;" onclick="redirectPage('<?php echo $backend_links['site_url']; ?>pages/');">
               <i class="mdi mdi-logout mdi-dark mdi-18px"></i>
            </a>
         </a>
      </li>
   </ul>

</nav>