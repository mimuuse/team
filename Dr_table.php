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
        SELECT * FROM doctor 
        WHERE fullname LIKE '%".$search."%'
        OR title LIKE '%".$search."%' 
        OR phone LIKE '%".$search."%' 
        ";
    }
    else
    {
        $query = "
        SELECT * FROM doctor ORDER BY id
        ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { ?>
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered 
            table-responsive">
                <tr>
                    <tr>
                   <th>ID</th>
                  <th>full name</th>
                  <th>town</th>
                  <th>age</th>
                 <th>DOF</th>
                  <th>address</th>
                 <th>title</th>
                  <th>phone</th>
                  <th>Martial status</th>
                <th>gender</th>                  
                <th>Action</th>
                </tr>
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td ><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["fullname"]; ?></td>
                    <td ><?php echo $row["town"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["dates"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                     <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["status"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td>
                    
                 <button type="submit" class="btn btn-success" data-toggle="modal" 
                 data-target="#edit-<?php echo $row['id']; ?>" id="">
                 <i class="fa fa-pencil fa-lg"></i> Edit</button>
                    <div class="modal fade" role="dialog" id="edit-<?php echo $row['id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 id="">Update doctor</h3>
                                    </div>
                                    <div class="modal-body">
                              <form  action = "Dr_update.php" method = "POST">
                            <input type="hidden"  name="id" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['id']; ?>"><br>
                            <input type="text" placeholder="full name" name="fullname" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['fullname']; ?>"><br>
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
                            <input type="text" placeholder="occ" name="title" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['title']; ?>"><br>
                            <input type="text" placeholder="status" name="status" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['status']; ?>"><br>
                            <input type="text" placeholder="gender" name="gender" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['gender']; ?>"><br>
                           <div class = "model-footer">
                           <button type="submit" class="btn btn-success" name="doctor_update" id="#edit-<?php echo $row['id']; ?>">Update doctor</button>
                         <a href="Dr_register.php" class="btn btn-danger pull-right " >Cancel</a> 
                            </div>
                               </form>
                         </div> 
                                </div>
                            </div>
                        </div>

                        <a onclick ="return confirm('are you sure to delete')" href="Dr_delete.php?idd=<?php echo $row['id'] ?>"  
                        class="btn btn-danger"><i class="fa fa-trash fa-lg"></i> Delete</a>    
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