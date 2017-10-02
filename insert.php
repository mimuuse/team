<?php 

include "config.php";

//declaring variables
//$firstName ,$lastName ,$town,$age ,$dates ,$address ,$occ ,$phone ,$status ,$gender;

$data =array();
function getData()
{
$data[1] =$_POST['firstname'];
$data[2] =$_POST['middlename'];
$data[3] =$_POST['lastname'];
$data[4] =$_POST['town'];
$data[5] =$_POST['age'];
$data[6] =$_POST['dates'];
$data[7] =$_POST['address'];
$data[8] =$_POST['phone'];
$data[9] =$_POST['status'];
$data[10] =$_POST['gender'];


return $data;
} 
//insert data for registration form....
    //  INSER VALUE
if(isset($_POST['registor'])){
    $info = getData();
    $sql = "INSERT INTO patient (firstname ,middlename,lastname, town, age, dates, address, phone,status,gender) 
    VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
 if ( $conn->query($sql)===TRUE) {
     header("location:modify.php");
    //  echo" Data inserted successfully";
    }
else {
    echo" Data  are not inserted";
    header("location:modify.php");
    }
}



?>
