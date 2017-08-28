<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="wrapper">
  <?php echo $temp = $_SERVER['REQUEST_URI'];
  function curPageName() {
     return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
    echo '<br>';
   echo curPageName();
      echo '<br>';
  ?>
</div>
<!-- ./wrapper -->


<div class="container">
  <h2>Modal Example</h2>
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
  ?>
  <table class="table table-bordered" width="100%">
    <thead>
        <tr>
            <th>id</th>
            <th>First name</th>
            <th>Last Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php 
      $sql = "SELECT id, first_name, last_name FROM users";
      $result = $conn->query($sql);
      ?>
      <tbody>
      <?php 
      while($row = $result->fetch_assoc()) {
       ?>
       <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['first_name']; ?></td>
          <td><?php echo $row['last_name']; ?></td>
          <td>
             <a href="test.php" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="icon-trash icon-white"></i> Delete</a>
            <button type="button" class="btn btn-info editBtn" data-id='<?=$row['id']?>' data-fname='<?=$row['first_name']?>'>Edit</button> 
          </td>
       </tr>

      <?php 
      }

    ?>
    </tbody>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         <input type="text" name="textBox1" id="textBox1">
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click", ".editBtn", function(){
      $("#myModal").modal('show');
      $("#textBox1").val($(this).attr('data-fname'));
    });
  });
</script>