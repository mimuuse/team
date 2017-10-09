<?php
include "config.php";
?>
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
              select{
                  width:300px;
                  height:35px;
                  border:4px;
                  font-size:14px;
                 
              }
              /* #filter{
                background-color:blue;
              }
              */
                  
             
              </style>
  </head>

<select placeholder="select the doctors Name Here.." name="filter" id="filter">
<?php
    //DROPDOWN FILTER QUERY ...
    $sql = "SELECT * FROM assign";
    $result = $conn->query($sql);
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){?>
            <option id = "filter" value="<?php echo $row['doctor']; ?>"><?php echo $row['doctor'];?></option>
        <?php }
    }
    ?>

</select>
<script>
            /// waa midka sameynaya dropdown Doctors names
                                $(document).ready(function(){
                                    $("#filter").on("change", function(){

                                    var Drname = $(this).val();
                                    if(Drname){
                            
                                        $.get(
                                            "assign_data_table.php",
                                            {doctor: Drname},
                                            function(data){
                                                $("#data").html(data);
                                            }
                                        );
                                        
                                    }
                                        else{
                                            $("#filter").html("enter");
                                        }
                                });
                                });
                            </script>

                            <div id="data"></div>
                            
    