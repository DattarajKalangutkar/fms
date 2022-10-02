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
         <i class="mdi mdi-Table mdi-grid-large menu-icon"></i>
         <span class="menu-title">List</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
           <i class="menu-icon mdi mdi-card-text-outline"></i>
           <span class="menu-title">Masters</span>
           <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="form-elements" style="">
           <ul class="nav flex-column sub-menu">
             <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Department</a></li>
           </ul>
         </div>
       </li>
   </ul>
</nav>