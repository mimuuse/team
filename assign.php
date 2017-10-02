<?php
include "config.php";
$sql1="SELECT firstname,middlename,lastname,age,gender FROM patient WHERE id=id";
$ressalt=$conn->query($sql1);
$firstname="";
$middlename="";
$lastname="";
$age="";
$gender = "";
$row=$ressalt->fetch_assoc();
while ($row=$ressalt->fetch_assoc()) {
$firstname=$row['firstname'];
$middlename=$row['middlename'];
$lastname=$row['lastname'];
$age=$row['age'];
$gender=$row['gender'];
}
?>

<!DOCTYPE html>
<html lang="en">
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
              </style>
  </head>
	
  <body>
  <div class="container">
  <br>
   
  <div class="jumbotron col-md-8 ">
	<h2 class="bg-sm bg-info ">&nbsp;&nbsp;&nbsp;Assigned patient.</h2><br>
	<div class="row panel-group">
				<form   action ="assign_php.php" method="POST">
				<div class="row">
					<div class="col-sm-12 ">
						<input type="hidden"  name="id" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['id']; ?>">			
											
						
						<div class="col-sm-8 form-group">
						<label  for="sel1">DOCTORS</label>
		  <select class="form-control" id="sel1" name = "doctors" placeholder="select the doctors Name Here..">
			<option>dr mustafe farax isse</option>
			<option>dr muuse ali nur</option>
			<option>drs fadima gele ali</option>
			<option>dr nuur farax omar</option>
			<option>drs nafisa gele ali</option>
			<option>drs aliya gele ali</option>
			<option>dr ciise ali nur</option>
			<option>dr ali abdi nur</option>
			<option>dr mohamad ali nur</option>
			
		  </select>
						</div>	
							<div class="col-sm-4 form-group">
								<label>TITLES</label>
								<select class="form-control" id="sel1" name = "title" placeholder="select the title Name Here..">
			<option>sergery</option>
			<option>midical</option>
			<option>phamcist</option>
			<option>general diseas</option>
			<option>dilivery</option>
			<option>psygology</option>
			<option>dentiste</option>
		  </select>
           </div><br><br><br>

           <!-- <div class="col-sm-4 form-group"> -->
				<!-- <label>first name</label>
				<input type="text" placeholder="Enter the Firstname Here.." class="form-control"name = "address">
				</div>
                <div class="col-sm-4 form-group">
				<label>middle name</label>
				<input type="text" placeholder="Enter the middlename Here.." class="form-control"name = "address">
				</div> -->
                <div class="col-sm-4 form-group">
				<label>first name </label>
				<input type="text" placeholder="Enter the first name .." class="form-control" name = "firstname" value="<?php 
                            echo $firstname; ?>">
				</div>
				<div class="col-sm-4 form-group">
				<label>middle name </label>
				<input type="text" placeholder="Enter the middle name ." class="form-control" name = "middlename" value="<?php 
                            echo $middlename; ?>">
				</div>
				<div class="col-sm-4 form-group">
				<label>last name </label>
				<input type="text" placeholder="Enter the last name Here.." class="form-control" name = "lastname" value="<?php 
                            echo $lastname; ?>">
				</div>

                		
					
						
                <div class="col-sm-6 form-group">
				<label>age</label>
				<input type="text" placeholder="Enter the age Here.." class="form-control" name = "age" value="<?php 
                            echo $age; ?>">
				</div>
            
            <div class="col-sm-6  form-group">
						<label  for="sel1">gender</label>
						<input type="text" placeholder="Enter the age Here.." class="form-control" name = "gender" value="<?php 
                            echo $gender; ?>">
                     </div>
          <div class="col-sm-12 form-group"><br>
          <label>PATIENT TYPE </label>
          &nbsp;&nbsp;&nbsp;<input type="radio" value="OUT PATIENT" name = "pateint" cheched="1">OUT PATIENT
          &nbsp; &nbsp;&nbsp;<input type="radio" value="EMERGENCY" name = "pateint" cheched="1">EMERGENCY
          &nbsp;&nbsp;&nbsp;<input type="radio" value="PATIENT" name = "pateint" cheched="1">PATIENT
          </div>		
		
				<div class=" col-sm-4">	
						<button type="reset" class="btn btn-lg btn-success" name = "reset">Reset</button>	
				</div>
				<div class=" col-sm-4"> <a href="start.php" class="btn btn-lg btn-danger">Cancel</a> </div>
				<div class="col-sm-4">	
				<button type="submit" class="btn btn-lg btn-info" name = "assign">save</button>
				</div>
				</form> 
                <!--
                <div class="panel panel-default">
                    <div class="panel-heading">Panel with panel-default class</div>
                    <div class="panel-body">Panel Content</div>
                </div> -->


				</div>
	</div>
	</div>
    
  </body>
</html>