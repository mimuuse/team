<?php
 include("config.php");
    if(isset($_GET["fullname"])){
        $doctorName = $_GET["fullname"];
        $sql = "select title from doctor where fullname = '$doctorName'";
        $do = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($do);
        if($count > 0) {
            while($row = mysqli_fetch_array($do)) {
                echo $row["title"];
            }
        }
       
    }
?>