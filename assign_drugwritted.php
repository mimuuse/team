<!-- <head>
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
  </head> -->




<?php
include "config.php";
if (isset($_GET['pre_id'])) {
  $idd = $_GET['pre_id'];
  
  
  $query = "SELECT * FROM drug_pre ORDER BY drug_id";
  //echo $query;
  $result = $conn->query($query);
  ?>
 <div class="table-responsive">
 
            <table class="table table-striped table-condensed table-hover table-bordered 
             table-responsive">
                <tr>
                <th>ID</th>
               <th>doctorname</th>
               <th>firsrname</th>
               <th>middlename</th>
               <th>lastname</th>
              <th >date</th>
               <th>drugname</th>
               <th>Quantity</th>
               <th>frequency</th>
             <th>timed</th>  
             <th>route</th>
                </tr>
        <?php

            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                <td ><?php echo $row["drug_id"]; ?></td>
                <td><?php echo $row["drname"]; ?></td>
                <td><?php echo $row["p_firstname"]; ?></td>
                <td><?php echo $row["p_middlename"]; ?></td>
                <td ><?php echo $row["p_lastname"]; ?></td>
                <td><?php echo $row["dates"]; ?></td>
                <td><?php echo $row["drugname"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                 <td><?php echo $row["frequency"]; ?></td>
                <td><?php echo $row["timed"]; ?></td>
                <td><?php echo $row["route"]; ?></td>
                </tr>
                  
             <?php
             }
             
echo "</table></div>";
?>


  <?php
}

  ?>