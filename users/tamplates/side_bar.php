

<?php 
   function curPageName() {
     return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
?>

 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/studentPortel/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
      <?php $curntPage =  curPageName(); if($curntPage == "index.php") { ?>
        <li class="treeview active">
            <a style="pointer-events: none;">
                <i class="fa fa-tachometer"></i> <span>Dash Board</span>
            </a>
            <?php
        } else{?>  <li class="treeview">
              <a href="./">
                  <i class="fa fa-tachometer"></i> <span>Dash Board</span>
              </a>
              <?php }  ?>
        </li>
          <?php $curntPage =  curPageName(); if($curntPage == "results.php") { ?>
        <li class="treeview active">
            <a style="pointer-events: none;">
                <i class="fa fa-files-o"></i> <span>Results</span>
            </a>
            <?php
        } else{?>  <li class="treeview">
              <a href="./results.php">
                  <i class="fa fa-files-o"></i> <span>Results</span>
              </a>
              <?php }  ?>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>