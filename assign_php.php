<?php 
include "config.php";

$data =array();
function getData(){ 
$data[1] =$_POST["doctors"];
$data[2] =$_POST["title"];
$data[3] =$_POST["pateint"];
return $data;
} 
//insert data for registration form...
if (isset($_POST['assign'])) {
    $info = getData();
    //relation 
    $id="";
    $firstname="";
    $middlename="";
    $lastname="";
    $age="";
    $gender = "";
    $sql1="SELECT id,firstname,middlename,lastname,age,gender FROM patient WHERE id =id" ;
    $result=$conn->query($sql1);
   // $row=$ressalt->fetch_assoc();
    while($row=$result->fetch_assoc()) {
    $id=$row['id'];
    $firstname=$row['firstname'];
    $middlename=$row['middlename'];
    $lastname=$row['lastname'];
    $age=$row['age'];
    $gender=$row['gender'];
    }
     
     $sql2 = "INSERT INTO assign (id,doctors,title,firstname,middlename,lastname,age,gender,pateint) 
    VALUES ('$id','$info[1]', '$info[2]','$firstname','$middlename','$lastname',
    '$age','$gender','$info[3]')";
    // echo" Database after query Insert";
    if ($conn->query($sql2)===TRUE) {
     echo "data inserted succsefully";
     header("location:assign_table.php");
    }
else{
    echo" Database query failed inserted"."<br>";
}

}
?>


