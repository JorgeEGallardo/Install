<?php include "ext/header.php" ?>
<?php include "ext/navbar.php" ?>
<?php include "ext/usConfirm.php"?>
<div class="d-flex" id="wrapper" style="height:100%">

    <!-- Sidebar -->
    <div class="bg-light border-right" style="height:100%" id="sidebar-wrapper">
        <div class="sidebar-heading"><?php echo $user ; ?></div>
        <div class="list-group list-group-flush">
      <?php include "ext/sidebar.php"?> 
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container" style="width:100%">
      <?php if($lvl>1){?>
    <button class="btn float-right btn-success" data-toggle="modal" data-target="#insertEvent">
  Insertar Nuevo
</button>
      <?php }?>
</div>
      <div id="main" style="margin-top:4%"></div>
    </div>
    <?php include "modals/insertEvent.php" ?>
    <?php include "ext/footer.php" ?>
    <script src="js/index.js"></script>