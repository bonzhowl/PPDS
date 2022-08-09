<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <h5 style="color: white;"><?=$title?></h5>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a href="<?=base_url()?>login/logout" class="dropdown-item dropdown-footer">
              <i class="fas fa-arrow-circle-right" ></i> 
              Logout
               <span class="float-right text-muted text-sm"></span>
      </a>
    </ul>
</nav>