
<!-- HTML FILE  -->



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
  <div class="jumbotron col-md-7 col-md-offset-2">
	<h2 class="bg-sm bg-info ">&nbsp;&nbsp;&nbsp;doctor info</h2><br>
	<div class="row panel-group">
				<form  action = "Dr_insert.php" method="POST">
					<div class="col-sm-12 ">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Enter Full Name Here.." class="form-control"
								 name = "fullname" required>
							</div>
							<!-- <div class="col-sm-4 form-group">
								<label>Middle Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control"name = "middleName">
							</div>
							<div class="col-sm-4 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control"name = "lastName">
							</div> -->
											
						
						<div class="col-sm-6 form-group">
						<label  for="sel1">Town</label>
		  <select class="form-control" id="sel1" name = "town" placeholder="select the city Name Here..">
			<option>muqdisho</option>
			<option>hargaisa</option>
			<option>bosaso</option>
			<option>galkacyo</option>
			<option>burco</option>
			<option>kismayo</option>
			<option>baydhaba</option>
			<option>afgooye</option>
			<option>dhusamareb</option>
			<option>qardho</option>
			<option>badhan</option>
			<option>ceerigaabo</option>
		  </select>
						</div>	
							<div class="col-sm-6 form-group">
								<label>age</label>
								<input type="number" placeholder="Enter age Here" class="form-control"name = "age">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Date of birth</label>
								<input type="date" placeholder="Enter the Code Here.." class="form-control"name = "dates">
							</div>		
						
				
							<div class="col-sm-6 form-group">
								<label>Address</label>
								<input type="text" placeholder="Enter the Address Here.." class="form-control"name = "address">
							</div>		
							<div class="col-sm-6  form-group">
							<label  for="sel1">title</label>
			  <select class="form-control" id="sel1" name = "title" placeholder="select the city Name Here..">
				<option>dentiste</option>
				<option>surgery</option>
				<option>spicialist</option>
				<option>pharcisite</option>
				<option>general disease</option>
				
				
			  </select>
							</div>	
						
                        <div class="col-sm-6 form-group">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter Phone  Here.." class="form-control"name = "phone">
                        </div>
                       <div class="col-sm-6  form-group">
						<label  for="sel1">martial status</label>
		  <select class="form-control" id="sel1" name = "status" placeholder="select the city Name Here..">
			<option>i am </option>
			<!-- <option>child</option> -->
			<option>single</option>
			<option>marriage</option>
			<!-- <option>burco</option> -->
			
		  </select>
						</div>						
                        		
						<div class="col-sm-6  form-group">
						<label  for="sel1">gender</label>
		  <select class="form-control" id="sel1" name = "gender" placeholder="select the grnder..">
			<option>i am </option>
			<option>male</option>
			<option>female</option>
			
			<!-- <option>burco</option> -->
			
		  </select>
						</div></div>	<br>
						
								
				<div class=" col-sm-4">	
						<button type="reset" class="btn btn-lg btn-success" name = "reset">Reset</button>	
				</div>
				<div class=" col-sm-4"> <a href="start.php" class="btn btn-lg btn-danger">Cancel</a> </div>
				<div class="col-sm-4">	
						<button type="submit" class="btn btn-lg btn-info" name = "Dr_regestor">Registor</button>
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