<!DOCTYPE html>
<html>
<head>
	<?php
	$this->load->view($header);
	  ?>
</head>
<body class="sidebar-mini layout-fixed text-sm" style="height: auto;">
	<div class="wrapper">
	<?php
		$this->load->view($navbar);
	?>

	<?php 
		$this->load->view($sidebar);
	 ?>
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-md-12">
	<?php
		$this->load->view($body);
	?>
	<div class="modal_loading"></div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <?php
  $this->load->view($footer);
    ?>
</div>
</body>
</html>