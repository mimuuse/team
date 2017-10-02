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
        SELECT * FROM assign 
        WHERE fullname LIKE '%".$search."%'
        OR title LIKE '%".$search."%' 
        OR phone LIKE '%".$search."%' 
        ";
    }
    else
    {
        $query = "
        SELECT * FROM assign ORDER BY id
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
                  <th>doctors</th>
                  <th>titels</th>
                  <th>firstname</th>
                  <th>middlename</th>
                  <th>lastna</th>
                 <th>age</th>
                 <th>gender</th>
                 <th>patient</th>
                 <th>action</th>
                </tr>
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td ><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["doctors"]; ?></td>
                    <td ><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["middlename"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["pateint"]; ?></td>
                    
                    <td>
                    
                 <button type="submit" class="btn btn-success" data-toggle="modal" 
                 data-target="#edit-<?php echo $row['id']; ?>" id="">
                 <i class="fa fa-pencil fa-lg"></i> Edit</button>
                    <div class="modal fade" role="dialog" id="edit-<?php echo $row['id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 id="">assign doctor</h3>
                                    </div>
                                    <div class="modal-body">
                              <form  action = "assign_php.php" method = "POST">
                            <input type="hidden"  name="id" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['id']; ?>"><br>
                            <input type="text" placeholder="doctors" name= "doctors" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['doctors']; ?>"><br>
                            <input type="text" placeholder="title" name= "title" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['title']; ?>"><br>
                            <input type="text" placeholder="firstname" name="fisrtname" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['firstname']; ?>"><br>
                              <input type="text" placeholder="middlename" name="middlename" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['middlename']; ?>"><br>
                              <input type="text" placeholder="lastname" name="lastname" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['lastname']; ?>"><br>
                            <input type="text" placeholder="age" name="age" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['age']; ?>"><br>
                            <input type="text" placeholder="gender" name="gender" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['gender']; ?>"><br>
                            <input type="text" placeholder="gender" name="pateint" id="#edit-<?php echo $row['id']; ?>" class="form-control" value="<?php 
                            echo $row['pateint']; ?>"><br>
                           <div class = "model-footer">
                           <button type="submit" class="btn btn-success" name="doctor_update" id="#edit-<?php echo $row['id']; ?>">Update assign</button>
                         <a href="Dr_register.php" class="btn btn-danger pull-right " >Cancel</a> 
                            </div>
                               </form>
                         </div> 
                                </div>
                            </div>
                        </div>

                        <a onclick ="return confirm('are you sure to delete')" href="Dr_delete.php?idd=<?php echo $row['id'] ?>"  
                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>    
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