<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="well">
        <?php     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "watersuplair";
            $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              } 
              $num_rec_per_page=2;
           if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
            $start_from = ($page-1) * $num_rec_per_page; 
            $sql = "SELECT * FROM users LIMIT $start_from, $num_rec_per_page"; 
            $rs_result = $conn->query($sql); //run the query
            ?> 
            <table class="table">
            <tr><th>id</th><th>Name</th> <th>Image</th></tr>
            <?php 
            while ($row = $rs_result->fetch_assoc()) { 
            ?> 
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>            
                     <td><img src="tamplates/<?php echo $row['last_name'];?>" alt=" " height="75" width="75"></td>           
                </tr>
            <?php 
            }; 
            ?> 
            </table>
            <?php 
            $sql = "SELECT *FROM users"; 
            $rs_result = $conn->query($sql);
            $temp = 0;
            while ($row = $rs_result->fetch_assoc()) {
                   $temp++; 
            }
            $total_pages = ceil($temp / $num_rec_per_page); 
            ?>
             <ul class="pagination"> 
              <li><a href='paginater.php?page=1'>First</a></li>   <!-- // Goto 1st page  --> 
                <?php
                    for ($i=1; $i<=$total_pages; $i++) { ?>
                            <li><a href='paginater.php?page=<?= $i?>'><?= $i?></a></li>
               <?php }; 
                ?>
               <li><a href='paginater.php?page=<?= $total_pages?>'>Last</a></li> <!-- // Goto last page -->    
          </ul>
          </div>
     </div>     



     <div class="container">
         <div class="well">
            <form action="test.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
         </div>
     </div>
</body>
</html>