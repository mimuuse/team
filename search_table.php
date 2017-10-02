<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HOSPITAL MANAGMENT SYSTEM </title>
       <script src = "jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="bootstrap.min.css" />
        <script src="bootstrap.min.js"></script>
        <style>
#imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
a{

 color : #fff;
}
        </style>
    </head>
 <body>

 

<br> <h3>hms search Page .</h3>
 <div class="container"> 
    <table class="table table-bordered" >
              
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>middleName</th>
                <th>lastName</th>
                <th>town</th>
                <th>age</th>
                <th>date</th>
                <th>address</th>
                <th>occ</th>
                <th>status</th>
                <th>gender</th>
                <th>Action</th>
                <th>Action</th>
                </tr>

 <!--firstName ,lastName, town, age, date, address, occ, phone status,gender..          -->

            <?php
            include "config.php";
             $idno="";
             if (isset($_POST['searchbtn'])){
                $idno= $_POST['search'];
                $sql = "SELECT *from patient WHERE id='$idno'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                while ($rows = $result->fetch_assoc()){
                 echo "<tr><td>".$rows['id']."</td>
                  <td>".$rows['firstname']."</td>
                   <td>".$rows['town']."</td>
                    <td>".$rows['age']."</td>
                    <td>".$rows['dates']."</td>
                    <td>".$rows['address']."</td>
                    <td>".$rows['title']."</td>
                    <td>".$rows['status']."</td>
                    <td>".$rows['gender']."</td><td>";
                                      
                    }      
                    }
                    }
            ?>
     </table>
  
 </body>
</html>