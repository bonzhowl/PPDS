  <style>
  li.right {
      position: absolute;
      right: 0;
  }

  #jam,#menit,#detik {
    font-size:50px;
  }
  </style>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="<?=base_url()?>assets/img/logo-rshs.png" alt="logo" class="img-thumbnail" style="opacity: .8"> &nbsp
          <span class="brand-text font-weight-light">Aplikasi PPDS</span>
        </a>
      
          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?=base_url()."index"?>" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                  <a href="<?=base_url()."login"?>" class="nav-link"> Login</a>
                    <span class="float-right text-muted text-sm"></span>
                  </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()."about"?>" class="nav-link">About</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">Personal File</a>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="<?=base_url("/Ppds/view_download")?>" class="dropdown-item">Donwload</a></li>
                  </ul>
              </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="p-1">
                  <span style="font-size:20px;" id = "jam"> </span>
                  <span style="font-size:20px;" id = "menit"> </span>
                  <span style="font-size:20px;" id = "detik"> </span>
                  <!-- <?php
                  date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
                  echo $timestamp = date('H:i:s');//Menampilkan Jam Sekarang
                  ?> -->
                </div>
                
            </ul>
          </div>
      </div>
    </nav>
<script>
  window.setTimeout("waktu()", 1000);

  function waktu(){
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours()+ " : ";
    document.getElementById("menit").innerHTML = waktu.getMinutes()+ " : ";
    document.getElementById("detik").innerHTML = waktu.getSeconds();
  }
</script>