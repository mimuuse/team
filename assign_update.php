<?php
   include "config.php";

    if(isset($_POST['assign_update'])) {
        $updateID = $_POST['id'];
        $doctor = "";
        $title = ""; 
        $fname = ""; 
        $mname = ""; 
        $lname = "";
        $age = ""; 
        $gender = ""; 
        $patient = "";
        $doctor = $_POST['doctors'];
        $title = $_POST['title'];
        $fname = $_POST['firstname'];
        $mname= $_POST['middlename'];
        $lname= $_POST['lastname'];
        $age= $_POST['age'];
        $gender= $_POST['gender'];
        $patient= $_POST['patient'];
        $sql = "UPDATE assign SET doctors= '$doctor', title='$title', firstname='$fname',
         middlename='$mname', lastname='$lname', age ='$age', gender='$gender' WHERE id = '$updateID'";
        if($conn->query($sql)===TRUE) {?>
            <script>
            alert("sucessfull updated");
            </script><?php
            header("location: assign_table.php");
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