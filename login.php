<!DOCTYPE html>
<html> 
   <head>
      <?php include 'head.php'?>
      <title>User Login - Pathlogy Lab</title>
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
         if(isset($_POST["btnlogin"])){
         	extract($_POST);
         	$q=pg_query("select * from tbluser where padhar='$txtadhar' and ppass='$txtpass'");
         	if(pg_num_rows($q)>0){
         		echo $_SESSION['padhar']=$txtadhar;
         		$q2=pg_query("select * from tbluser where padhar='".$_SESSION['padhar']."'");
         		$r2=pg_fetch_array($q2);
         		$_SESSION['pid']=$r2['pid'];
         		header("location:welcome.php");
         	}
         	else{
         		?>
      <script type="text/javascript">
         alert("Invalid Credentials");
      </script>
      <?php
         }
         
         }
         ?>
      <?php include 'menu.php'?>

      <div class="row">
         <div class="col-md-8">
            <img src="proimages/bg-login.jpg" width="100%">
         </div>
         <div class="col-md-4 d-flex align-items-center px-5">
         	<form method="post">
            	<div class="row">
            		<h2>Login</h2>
            		<div class="col-md-12 my-3">
            			<label>Adhaar Number</label>
            			<input type="number" name="txtadhar" class="form-control" placeholder="Enter 12 Digit Aadhar card Number"> 	
            		</div>
            		<div class="col-md-12 my-3">
            			<label>Password</label>
            			<input type="password" name="txtpass" class="form-control" placeholder="Enter Password">	
            		</div>
            		<div class="col-md-12 my-3">
            			<input type="submit" class="btn btn-success" name="btnlogin" value="Sign In">
            		</div>
                  <div class="col-md-12 my-3">
                     <p>New user? <a href="register.php"> Register Now</a></p>
                  </div>
            	</div>
         	</form>
         </div> 	
      </div>
      <?php include 'footer.php'?>
   </body>
</html>