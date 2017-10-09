<?php 
 include ("config.php");
  if (isset($_GET['idAssign'])) {
    $idAssign = $_GET['idAssign'];
    $firstname = "";
    $middlename = "";
    $lastname = "";
    $age = "";
    $gender = "";
$sql = "SELECT id,firstname,middlename,lastname,age,gender FROM patient WHERE id = '$idAssign'";
        $result = $conn->query($sql);
           while($row = mysqli_fetch_array($result)){ 
            $id = $row['id'];
            $firstname = $row['firstname'];
            $middlename = $row['middlename'];
            $lastname = $row['lastname'];
            $age = $row['age'];
            $gender = $row['gender']; 
            }
            }
    ?>