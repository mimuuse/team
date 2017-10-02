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
   <div class="container-fluid">
	<div class="row">
        <div class="col-sm-8" style="margin:-140px 0 0 0 ">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <!--<input type="text" class="form-control"  placeholder="Search" >-->
                     <input type="text" name="search_text" id="search_text" 
                        placeholder="Search Doctors.." class="form-control" /><br>
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
         <span> <a  href="Dr_regester.php" class="btn btn-primary btn-md pull-right 
         glyphicon glyphicon-plus"  class="form-control" 
        style = " font-size : 12pt; " > Add Doctor</a></span>
   
            </div>
	</div>
</div>
<br><br>
                       
            
                
        <div class="row">
            <div class="col-sm-12">
                <div id="result"></div>
            


<script>
        $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
            url:"Dr_table.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });
</script>
           </div>
        </div>
    </div>
 </body>
</html>