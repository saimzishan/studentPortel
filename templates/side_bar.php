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
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
      <?php $curntPage =  curPageName(); if($curntPage == "dashBoard.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./dashBoard.php">
            <i class="fa fa-tachometer"></i> <span>Dash Board</span>
          </a>
        </li>
        <?php $curntPage =  curPageName(); if($curntPage == "index.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./index.php">
            <i class="fa fa-users"></i> <span>Students</span>
          </a>
        </li>
        <?php $curntPage =  curPageName(); if($curntPage == "teachers.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./teachers.php">
            <i class="fa fa-user-secret"></i>
            <span> Teachers</span>
          </a>
        </li>
         <?php $curntPage =  curPageName(); if($curntPage == "samester.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./samester.php">
            <i class="fa fa-university"></i>
            <span> Samister details</span>
          </a>
        </li>
        <?php $curntPage =  curPageName(); if($curntPage == "subjects.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./subjects.php">
            <i class="fa fa-suitcase"></i>

            <span>Subjects</span>
          </a>
        </li>
        <?php $curntPage =  curPageName(); if($curntPage == "fee.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./fee.php">
            <i class="fa fa-file"></i>
            <span>Students Fee</span>
          </a>
        </li>
        <?php $curntPage =  curPageName(); if($curntPage == "results.php") { ?>
        <li class="treeview active"> <?php
        } else{?>  <li class="treeview"> <?php }  ?>
          <a href="./results.php">
          <i class="fa fa-files-o"></i>
            <span>Results</span>
          </a>
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>