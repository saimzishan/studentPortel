

<?php 
   function curPageName() {
     return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
?>
<?php
if(isset($_SESSION['stu_id']))
{
    $user_id = $_SESSION['stu_id'];
    $q = "SELECT * FROM students WHERE id = '$user_id' ";
    $r = mysqli_query($dbc,$q);
    $row = $r->fetch_array();
    $name = $row['name'];
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
          <p><?php echo $name?></p>
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
          <?php $curntPage =  curPageName(); if($curntPage == "fee.php") { ?>
        <li class="treeview active">
            <a style="pointer-events: none;">
                <i class="fa fa-file"></i> <span>Fee</span>
            </a>
            <?php
        } else{?>  <li class="treeview">
              <a href="./fee.php">
                  <i class="fa fa-file"></i> <span>Fee</span>
              </a>
              <?php }  ?>
        </li>
     <?php $curntPage =  curPageName(); if($curntPage == "subjects.php") { ?>
        <li class="treeview active">
            <a style="pointer-events: none;">
                <i class="fa fa-suitcase"></i> <span>Subjects</span>
            </a>
            <?php
        } else{?>  <li class="treeview">
              <a href="./subjects.php">
                  <i class="fa fa-suitcase"></i> <span>Subjects</span>
              </a>
              <?php }  ?>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>