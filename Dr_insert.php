<?php

//insert doctor 

include "config.php";

$data =array();
function getData()
{ 

$data[1] =$_POST['fullname'];
$data[2] =$_POST['town'];
$data[3] =$_POST['age'];
$data[4] =$_POST['dates'];
$data[5] =$_POST['address'];
$data[6] =$_POST['title'];
$data[7] =$_POST['phone'];
$data[8] =$_POST['status'];
$data[9] =$_POST['gender'];

return $data;
} 

//insert data for registration form...
if (isset($_POST['Dr_regestor'])) {


    $info = getData();
  $sql = "INSERT INTO doctor (fullname,town,age,dates,address,title,phone,status,gender) 
    VALUES ('$info[1]', '$info[2]', '$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]')";
 if ( $conn->query($sql)===TRUE) {
     echo" Data inserted successfully";
     header("location:Dr_show.php");
    }
else {
    echo" Data  are not inserted";
    }


}

?>