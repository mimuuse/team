<?php 
  $conn = new mysqli("localhost", "root", "", "sample");
  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM doctor WHERE id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='Dr_show.php';
        </script>
        <?php
         }else {?>
    <script>
    alert("failed to delete ");
    window.location.href = 'Dr_show.php';
    </script>
    }<?php
    }
  }
    ?>