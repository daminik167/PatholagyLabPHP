<!DOCTYPE html>
<html>
   <head>
      <?php include 'head.php'?>
      <title>Register - Pathlogy Lab</title>
      <!-- For mobile responsive  -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap cdn -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- bootstrap cdn -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
   </head>
   <body>
      <?php
         if(isset($_POST["btnsave"])){
         	extract($_POST);
         	pg_query("insert into tbluser(pname,pemail,padhar,page,ppass,pdob,pbloodgrp,pgender) values ('$txtname','$txtemail','$txtadhar', '$txtpage' ,'$txtpass','$txtdob','$txtbloodgrp','$rbgender')");
         	?>
      <script type="text/javascript">
         alert("Registered Successfully");
      </script>
      <?php
         }
         ?>
      <?php include 'menu.php'?>
      
		<div class="row">
         
         <div class="col-md-6 d-flex align-items-center px-5">
         	<form method="post">
            	<div class="row">
            		<h2>Register Now</h2>
            		<div class="col-md-6 my-3">
            			<label>Full Name</label>
            			<input type="text" name="txtname" class="form-control" placeholder="Enter Your Full Name"> 	
            		</div>
            		<div class="col-md-6 my-3">
            			<label>Email ID</label>
            			<input type="text" name="txtemail" class="form-control" placeholder="Enter Your Email ID"> 	
            		</div>
            		<div class="col-md-6 my-3">
            			<label>Adhaar Number</label>
            			<input type="text" name="txtadhar" class="form-control" placeholder="Enter Your Adhaar Number"> 	
            		</div>
            		
            		<div class="col-md-6 my-3">
            			<label>Age</label>
            			<input type="text" name="txtpage" class="form-control" placeholder="Enter Your Age"> 	
            		</div>
            		<div class="col-md-6 my-3">
            			<label>Date Of Birth</label>
            			<input type="date" name="txtdob" class="form-control" placeholder="Enter Your Date Of Birth"> 	
            		</div>
            		<div class="col-md-6 my-3">
            			<label>Blood Group</label>
            			<input type="text" name="txtbloodgrp" class="form-control" placeholder="Enter Your Blood Group"> 	
            		</div>
            		
            		<div class="col-md-6 my-3">
            			<label>Password</label>
            			<input type="password" name="txtpass" class="form-control" placeholder="Enter Password">	
            		</div>
            		<div class="col-md-6 my-3">
            			<label>Gender</label>
            			<br>
            			<input type="radio" name="rbgender" checked value="Male">Male
                        <input type="radio" name="rbgender" value="Female">Female
            		</div>
            		<div class="col-md-6 my-3">
            			<input type="submit" class="btn btn-success" name="btnsave" value="Register">
            		</div>
            	</div>
         	</form>
         </div> 
         <div class="col-md-6">
            <img src="proimages/bg-login.jpg" width="100%">
         </div>	
     	</div>


      <?php include 'footer.php'?>
   </body>
</html>