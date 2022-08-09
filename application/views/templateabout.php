<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php
  $this->load->view($header);
 ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <?php
      $this->load->view($navbar);
    ?> 
    <?php
      $this->load->view($body);
    ?> 
    <?php
      $this->load->view($sidebar);
    ?> 
    <?php
      $this->load->view($footer);
    ?> 

</div>
<!-- ./wrapper -->


</body>
</html>
