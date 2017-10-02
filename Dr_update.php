<?php
   include "config.php";

    if(isset($_POST['doctor_update'])) {
        $updateID = $_POST['id'];
        $fname = "";
        $town = ""; 
        $age = ""; 
        $dates = ""; 
        $address = "";
        $title = ""; 
        $phone = ""; 
        $status = ""; 
        $gender = "";
        $fname = $_POST['fullname'];
        $town = $_POST['town'];
        $age = $_POST['age'];
        $dates= $_POST['dates'];
        $address= $_POST['address'];
        $phone= $_POST['phone'];
        $title= $_POST['title'];
        $status= $_POST['status'];
        $gender= $_POST['gender'];
        $sql = "UPDATE doctor SET fullname= '$fname', town='$town', age='$age', dates='$dates', 
        address='$address', phone ='$phone', title='$title',  status='$status', 
        gender='$gender' WHERE id = '$updateID'";
        if($conn->query($sql)===TRUE) {?>
            <script>
            alert("sucessfull updated");
            </script><?php
            header("location: Dr_show.php");
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
    <!-- <?php include(""); ?> -->
</body>
</html>