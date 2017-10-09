<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HOSPITAL MANAGMENT SYSTEM </title>
       <script src = "jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="bootstrap.min.css" />
        <script src="bootstrap.min.js"></script>
        <style>
            th{
                font-size :16;
                font-weight : bold;
                background-color:#0000ff;
                color:#fff;
                font-style : bold;
            }
         </style>
    </head>
 <body>
 





<?php
    $conn = new mysqli("localhost", "root", "", "sample");
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "
        SELECT * FROM patient 
        WHERE firstname LIKE '%".$search."%'
        OR lastname LIKE '%".$search."%' 
        OR phone LIKE '%".$search."%' 
        ";
    }
    else
    {
        $query = "
        SELECT * FROM patient ORDER BY id
        ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { ?>
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                    <tr>
                   <th>ID</th>
                  <th>first name</th>
                  <th>middlename</th>
                  <th>lastname</th>
                  <th>town</th>
                  <th>age</th>
                 <th style="padding-right:7%">date</th>
                  <th>address</th>
                  <th>phone</th>
                  <th>status</th>
                <th>gender</th>                  
                <th style="padding-right:20%;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                </tr>
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td ><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["middlename"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td ><?php echo $row["town"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["dates"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                     <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["status"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td>
                    
                 <button type="submit" class="btn btn-md btn-success" data-toggle="modal" data-target="#edit-<?php echo $row['id']; ?>" id=""><i class="fa fa-pencil"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 id="">Update patient</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                               <form method = "post">
                            <input type="hidden"  name="id" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['id']; ?>"><br>
                            <input type="text" placeholder="first name" name="firstname" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['firstname']; ?>"><br>
                            <input type="text" placeholder="middlename" name="middlename" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['middlename']; ?>"><br>
                            <input type="text" placeholder="lastname" name="lastname" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['lastname']; ?>"><br>
                            <input type="text" placeholder="town" name="town" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['town']; ?>"><br>
                            <input type="text" placeholder="age" name="age" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['age']; ?>"><br>
                            <input type="text" placeholder="dates" name="dates" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['dates']; ?>"><br>
                            <input type="text" placeholder="address" name="address" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['address']; ?>"><br>
                             <input type="text" placeholder="phone" name="phone" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['phone']; ?>"><br>
                            <input type="text" placeholder="status" name="status" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['status']; ?>"><br>
                            <input type="text" placeholder="gender" name="gender" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['gender']; ?>"><br>
                           <div class = "model-footer">
                           <button type="submit" class="btn btn-success" name="patient_update" id="#edit-<?php echo $row['id']; ?>">Update patiant</button>
                         <a href="modify.php" class="btn btn-danger pull-right" >Cancel</a> 
                         
                            </div>
                               </form>
                         </div> 
                                </div>
                            </div>
                        </div>
                        <a href="?idDelete=<?php echo $row['id'] ?>"><button name="delete" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button></a>
                        <a href="assign.php?idAssign=<?php echo $row['id'] ?>"  
                        class="btn bnt-sm btn-info"><i class="fa fa-user"></i> assign</a>  
                        
                        
                    </td>
                </tr>
                  
             <?php
             }
             } 

else
{
 echo 'Data Not Found';
}
echo "</table></div>";
?>

</body>
</html>