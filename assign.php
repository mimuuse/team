<?php
include "config.php";
$pid="";
if (isset($_GET['idAssign'])) {
$pid=	$_GET['idAssign'];
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
		<form action = "assign_insert.php" method="POST">
            <div class="row">
					<div class="col-sm-12 ">
						<input type="hidden"  name="id" value="<?php echo  $pid; ?>" 
						class="form-control" value="<?php 
						//	echo $row['id']; ?>">	
				</div>		
											
			<div class="col-sm-8 form-group">
			<label  for="sel1">DOCTORS</label>
						<select  class="form-control" id="fullname" 
					name = "doctor" placeholder="select the doctors Name Here..">
						<?php
						//Doctor Query 
						$sql = "select fullname from doctor";
						$result = $conn->query($sql);
						if($result->num_rows >0){
							while($row = $result->fetch_assoc()){?>
								<option value="<?php echo $row['fullname']; ?>"><?php echo $row['fullname']; 
								?></option>
							<?php }
						}
						?>
					</select>
			
						
						<script>
                                /// waa midka sameynaya dropdown items-ka
                                $(document).ready(function(){
                                    $("#fullname").on("change", function(){
                                    var P_ID = $(this).val();
                                    if(P_ID){
                                        $.get(
                                            "doctorTitle.php",
                                            {fullname: P_ID},
                                            function(data){
                                                $("#title").val(data);
                                            }
                                        );
                                        
                                    }
                                        else{
                                            $("#title").html("enter");
                                        }
                                });
                                });
                            </script></div>
						<div class="col-sm-4 form-group">
						   <label>TITLES</label>
							<input type="text" class="form-control" id="title" name = "title" placeholder="select the title Name Here..">
						</div> 
					                
						<?php 
						 include "assignByid.php";
						?>
				<!-- <input type="hidden" name = "id" value="<//?php echo $id; ?>"> -->
			<div class="col-sm-4 form-group">
					<label>first name </label>
				<input type="text" placeholder="Enter the first name .." class="form-control" name = "firstname" value="<?php echo $firstname; ?>">
			</div>
            <div class="col-sm-4 form-group">
				<label>middle name </label>
				<input type="text" placeholder="Enter the middle name ." class="form-control" name = "middlename" value="<?php 	echo $middlename; ?>">
			</div>
			<div class="col-sm-4 form-group">
					   <label>last name </label>
			           <input type="text" placeholder="Enter the last name Here.." 
					   class="form-control" name = "lastname" value="<?php echo $lastname; ?>">
			</div>
            <div class="col-sm-6 form-group">
				<label>age</label>
				<input type="text" placeholder="Enter the age Here.."class="form-control" name = "age" value="<?php echo $age;?>">
			</div>
            <div class="col-sm-6  form-group">
				<label  for="sel1">gender</label>
				<input type="text" placeholder="Enter the age Here.." class="form-control" name = "gender" value="<?php echo $gender; ?>">
		    </div>
          <div class="col-sm-12 form-group"><br>
				<label>PATIENT TYPE </label>
				&nbsp;&nbsp;&nbsp;<input type="radio" value="OUT PATIENT" name = "patient" >OUT PATIENT
				&nbsp; &nbsp;&nbsp;<input type="radio" value="EMERGENCY" name = "patient" >EMERGENCY
				&nbsp;&nbsp;&nbsp;<input type="radio" value="PATIENT" name = "patient" >PATIENT
          </div>		
		
		<div class=" col-sm-4">	
		<button type="reset" class="btn btn-lg btn-success" name = "reset">Reset</button>	
		</div>
		<div class=" col-sm-4"> <a href="start.php" class="btn btn-lg btn-danger">Cancel</a> </div>
		<div class="col-sm-4">
	    <button name="save" type = "submit"  class="btn btn-lg btn-info">save</button> 
		</div>
		</div>
		 </form> 
     </div>
	</div>
	</div>
    
  </body>
</html>





