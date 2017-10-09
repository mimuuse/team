<?php
include "config.php";
$pre_id = "";
if (isset($_GET['idd'])) {
$pre_id = $_GET['idd'];

    }
$data =array();
function getData(){ 
$data[1] =$_POST['doctorname'];
$data[2] =$_POST['firstname'];
$data[3] =$_POST['middlename'];
$data[4] =$_POST['lastname'];
$data[5] =$_POST['dates'];
$data[6] =$_POST['drugname'];
$data[7] =$_POST['Quantity'];
$data[8] =$_POST['frequency'];
$data[9] =$_POST['timed'];
$data[10] =$_POST['route'];
return $data;
} 
//insert data for registration form...
if (isset($_POST['save'])) {
    $info = getData();
  $sql ="INSERT INTO drug_pre (drug_id,drname,p_firstname, p_middlename, p_lastname, dates,drugnam,quantity,frequency,timed,route)
   VALUES($pre_id,'$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
if ($conn->query($sql)===TRUE) {
    echo" Data inserted successfully";}
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


<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Drug prescription</h3>
						
					</div>
					<div class="panel-body">
						<form  action = "" method="POST">
                            <div class="col-sm-12 ">
                                <div class="row">
                                <div class="col-sm-12 ">
						        <input type="hidden"  name="id" value="<?php echo  $pre_id; ?>" class="form-control" value="<?php//	echo $row['id']; ?>">	
				                  </div>	
                                    <div class="col-sm-12 form-group">
                                        <label> doctor Name</label>
                                        <?php
                                       $fname = "";
                                       $mname = "";
                                       $lname = "";

                                            //Doctor Selection Query 
                                            $sql = "SELECT doctor,firstname,middlename,lastname FROM assign WHERE id = $pre_id ";
                                            $result = $conn->query($sql);
                                            if($result->num_rows >0){
                                                while($row = $result->fetch_assoc()){?>
                                                   <input type="text" placeholder="Enter Full Doctor Name Here.." class="form-control"name = "doctorname"  required value="<?php echo $row['doctor']; ?>">
                                                   
                                                <?php 
                                                $fname  = $row['firstname'];
                                                $mname  = $row['middlename'];
                                                $lname  = $row['lastname'];
                                            }
                                            }
                                            ?>

                              
                                     
                                    </div>
                                     <div class="col-sm-4 form-group">
                                        <label>firstname</label>

                                        <input type="text" placeholder="Enter firstname Here.."class="form-control"name = "firstname" value="<?php echo $fname; ?>">
                                    </div> 
                                    <div class="col-sm-4 form-group">
                                        <label>middlename</label>
                                        <input type="text" placeholder="Enter middlename Here.."  class="form-control"name = "middlename" value="<?php echo $mname; ?>">
                                    </div> 
                                    <div class="col-sm-4 form-group">
                                        <label>lastname</label>
                                        <input type="text" placeholder="Enter lastname Here.."  class="form-control"name = "lastname" value="<?php echo $lname; ?>">
                                </div> 
                                <div class="col-sm-6 form-group">
                                        <label>Date</label>
                                        <input type="date" placeholder="Enter the Code Here.." class="form-control"name = "dates">
                               </div>	
                                <div class="col-md-6 form-group">
                                        <label>drug Name</label>
                                        <input type="text" placeholder="Enter drug Name Here.." class="form-control"name = "drugname" required>
                                    </div>		
                                    <div class="col-md-4 form-group">
                                        <label>Quantityy</label>
                                        <input type="text" placeholder="Enter Quality Name Here.." class="form-control" name = "Quantity" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label> frequency</label>
                                        <input type="number" placeholder="Enter fregquenty Name Here.." class="form-control"
                                         name = "frequency" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label> time</label>
                                        <input type="number" placeholder="Enter time Name Here.." class="form-control"
                                         name = "timed" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label> route/instruction</label>
                                        <input type="text" placeholder="Enter drug Name Here.." class="form-control"
                                         name = "route" required>
                                    </div>	
                        
                                    
                            </div>	<br>
                                
                                        
                            <div class=" col-sm-4">	
                                    <button type="reset" class="btn btn-lg btn-success" name = "reset">Reset</button>	
                            </div>
                            <div class=" col-sm-4"> <a href="index.php" class="btn btn-lg btn-danger">Cancel</a> </div>
                            <div class="col-sm-4">	
                                <button type="submit" href = "assign_pre.php" class="btn btn-lg btn-info" name = "save">save</button>
                           </div>
                    </form> 
					</div>
					
				</div>
            </div>
            
        </body>
        </html>