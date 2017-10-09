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
     </script>