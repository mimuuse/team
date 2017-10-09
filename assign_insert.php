
  <?php
//$sql = 'select pt.firstname,pt.middlename,pt.lastname,pt.age,pt.gender FROM  patient PT, doctor DC WHERE pt.id = dc.P_ID"';
include "config.php";
$doctor = "";
$title =""; 
$firstname =""; 
$middlename = ""; 
$lastname = ""; 
$age = "";
$gender = "";
$patient = "";
if(isset($_POST['save']) && !empty($_POST['patient'])){
    $id = $_POST['id'];
    $doctor = $_POST['doctor']; 
    $title = $_POST["title"]; 
    $firstname = $_POST["firstname"]; 
    $middlename = $_POST["middlename"]; 
    $lastname = $_POST['lastname']; 
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $patient = $_POST['patient'];
    $query ="SELECT * FROM assign WHERE id = '$id'";
    $result = $conn->query($query);
    $rowcount=mysqli_num_rows($result);
$sql = "INSERT INTO assign(id,doctor,title,firstname,middlename,lastname,age,gender,patient) 
VALUES ($id,'$doctor','$title','$firstname','$middlename','$lastname',$age,'$gender','$patient')";
 if ($rowcount===1) {
     echo "this is person is already assigned!!";
    //  header("location:assign_table.php");
 }
 else {
    if ($conn->query($sql)===TRUE) {
     header("location:assign_table.php");
        //echo"data inserted successfully"."<br>";
     }
     }
    //  else{
    //      echo "Not inserted !";
    //  }
 }
 

