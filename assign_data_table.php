<head>
    <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script> 
           <link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 
            table{
                border-bottom :20px;
           }
                  
             
              </style>
  </head>











<?php
include "config.php";
if (isset($_GET['doctor'])) {
  $dname = $_GET['doctor'];
  $query = "SELECT * FROM assign WHERE doctor = '$dname'  ORDER BY firstname";
  //echo $query;
  $result = $conn->query($query);
  ?>
 <div class="table-responsive"r>
 
            <table class="table table-striped table-condensed table-hover table-bordered 
            table-responsive">
                <tr>
                    <tr>
                   <th>ID</th>
                  <th>doctors</th>
                  <th>titels</th>
                  <th>firstname</th>
                  <th>middlename</th>
                  <th>lastna</th>
                 <th>age</th>
                 <th>gender</th>
                 <th>patient</th>
                 <th>action</th>
                </tr>
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td ><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["doctor"]; ?></td>
                    <td ><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["middlename"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["patient"]; ?></td>
                    
                    <td>

                        <a onclick ="return confirm('are you sure to delete')" href="assign_table.php?idd=<?php echo $row['id'] ?>"  
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> 
                        <a href="assign_drug.php?idd=<?php echo $row['id'] ?>"  
                        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> U QOR</a>   
                    </td>
                </tr>
                  
             <?php
             }
             
echo "</table></div>";
?>


  <?php
}

//DELETE CODE 
$conn = new mysqli("localhost", "root", "", "sample");
if (isset($_GET['idd'])) {
  $idd = $_GET['idd'];
  $sql= "DELETE FROM assign WHERE id ='$idd'";
   if ($conn->query($sql)===TRUE) {?>
      <script>
      alert("data deleted successfuly");
      window.location.href='assign_table.php';
      </script>
      <?php
       }else {?>
  <script>
  alert("failed to delete ");
  window.location.href = 'assign_table.php';
  </script>
  }<?php
  }
}
  ?>