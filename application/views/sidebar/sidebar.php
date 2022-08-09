<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?=base_url()?>assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RSHS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/img/avatar5.PNG" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nama?></a>
        </div>
      </div>

    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-compact nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MAIN NAVIGATION</li>
          <li class="nav-item">
            <a href="<?php echo base_url("/Dashboard") ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <?php
                if ($akses == 2){
                  echo "";
                }
                else
                {
              ?>
          <?php }?>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                PPDS-I
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url("/Ppds") ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lihat Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url("/Ppds/insert") ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url("/Ppds/view_akademik") ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Status Akademik</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-upload"></i>
              <p>
              PERSONAL FILE
             <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class=" nav nav-treeview">
              <li class="nav-item">
               <a href="<?php echo base_url("/Ppds/view_upload")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upload</p>
               </a>
              </li>
              <?php
                if ($akses == 2){
                  echo "";
                }
                else
                {
              ?>
              <li class="nav-item">
               <a href="<?php echo base_url("/Ppds/view_download")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Download</p>
               </a>
              </li>
               <?php }?>
            </ul>
          </li>
         <!--  <li class="nav-header">SETTING</li>
          <li class="nav-item">
            <a href="<?=site_url('user')?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                USERS
              </p>
            </a>
          </li> -->
         </ul>
        </nav>
   <!-- /.sidebar-menu -->
    </div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 65.0905%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
</aside>
          