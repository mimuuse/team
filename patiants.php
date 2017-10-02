<?php
    $conn = new mysqli("localhost", "root", "", "sample");
if(isset($_GET['idDelete'])){
        $idDelete = $_GET['idDelete'];
        $sql = "delete from patient where id='$idDelete'";
        if($conn->query($sql)===true) {
            // header("location: patiants.php");
        }
        else { ?>
            <script>
                alert("failed to delete");
                window.location.href='patiants.php';
            </script>
            <?php
            echo "failed to delete";
        }
    }

    if(isset($_POST['patient_update'])) {
        $updateID = $_POST['id'];
        $fname = "";
        $mname = "";  
        $lname = ""; 
        $town = ""; 
        $age = ""; 
        $dates = ""; 
        $address = "";
        
        $phone = ""; 
        $status = ""; 
        $gender = "";
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $lname = $_POST['lastname'];
        $town = $_POST['town'];
        $age = $_POST['age'];
        $dates= $_POST['dates'];
        $address= $_POST['address'];
        $occ= $_POST['occ'];
        $status= $_POST['status'];
        $gender= $_POST['gender'];
        $sql = "UPDATE patient SET firstname= '$fname', middlename= '$mname', lastname= '$lname', 
        town='$town', age='$age', dates='$dates', address='$address', 
      status='$status', gender='$gender' WHERE id = '$updateID'";
        if($conn->query($sql)===TRUE) {?>
            <script>
            alert("sucessfull updated");
            </script><?php
            // header("location: patiants.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src = "jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="bootstrap.min.css" />
        <script src="bootstrap.min.js"></script>
</head>
<body>
    <?php include("search_patiant.php"); ?>
</body>
</html>