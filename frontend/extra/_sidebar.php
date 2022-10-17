<?php
   $sideMenuhideshow = getSessionData();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <li class="nav-item">
         <a class="nav-link" href="<?php echo $site_url;?>pages/dashboard.php">
         <i class="mdi mdi-grid-large menu-icon"></i>
         <span class="menu-title">Dashboard</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?php echo $site_url;?>pages/services_list.php">
         <i class="menu-icon mdi mdi-table"></i>
         <span class="menu-title">List</span>
         </a>
      </li>
      <?php 
         if($sideMenuhideshow['level'] == 1 || $sideMenuhideshow['level'] == 0)
         {
      ?>
            <li class="nav-item">
               <a class="nav-link collapsed" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                 <i class="menu-icon mdi mdi-card-text-outline"></i>
                 <span class="menu-title">Masters</span>
                 <i class="menu-arrow"></i>
               </a>
               <div class="collapse" id="form-elements" style="">
                 <ul class="nav flex-column sub-menu">
                   <li class="nav-item"><a class="nav-link" href="<?php echo $site_url;?>pages/master_list.php?type=department">Department</a></li>
                   <li class="nav-item"><a class="nav-link" href="<?php echo $site_url;?>pages/master_list.php?type=services_types">Services Type</a></li>
                 </ul>
               </div>
            </li>
      <?php
         }
      ?>
   </ul>
</nav>