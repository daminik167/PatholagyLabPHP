<!DOCTYPE html>
<html>
   <head>
      <?php include 'head.php';?>
      <title></title>
      <!-- For mobile responsive  -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap cdn -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- bootstrap cdn -->
      <link rel="stylesheet" type="text/css" href="css/custom.css">
   </head>
   <body>

   	
    
      <?php include 'menu.php';?>
    
      <div class="container">
	      <div class="row">
	         <h2 class="mt-2">Appointment Details</h2>
<h3></h3>
						

	         <?php
	           
	            $q=pg_query("select * from tblapp,tbluser,tbltest,tbldoctor where tblapp.pid=tbluser.pid and tblapp.tid=tbltest.tid and tblapp.did=tbldoctor.did and tblapp.pid=".$_SESSION['pid']);
	            while ($r=pg_fetch_array($q)) {
	            	?>

	          <div class="col-md-4 mt-2">
	            <div class="card">
	               <div class="card-body">
	               	<div class="row my-3">
		               	<div class="col-md-6 f-left text-center">
		               		<p class="m-0">Test	Name</p>
		               		<h4><?php echo $r['tname'];?></h4>
		               	</div>
		               	<div class="col-md-6 f-left text-center">
		               		<p class="m-0">Booked Date</p>
		               		<h4><?php echo $r['papdate'];?></h4>
		               	</div>
	               </div>

	               <div class="row  my-3">
		               	<div class="col-md-6 f-left text-center">
		               		<p class="m-0">Patient name</p>
		               		<h4><?php echo $r['pname'];?></h4>
		               	</div>
		               	<div class="col-md-6 f-left text-center">
		               		<p class="m-0">Test Price</p>
		               		<h4> Rs: <?php $total+=$r['tprice'];
	                              echo $r['tprice'];?></h4>
		               	</div>
	               </div>
	               <div class="row  my-3">
		               	<div class="col-md-6 f-left text-center">
		               		<p class="m-0">Patient name</p>
		               		<h4><?php echo $r['pname'];?></h4>
		               	</div>
		               	<div class="col-md-6 f-left text-center">
		               		<p class="m-0">Appointment Status</p>
		               		<h4> <?php echo $r['status'];?></h4>
		               	</div>
	               </div>

	               <div class="row">
		               	<div class="col-md-12 f-left text-center">
		               		
		               	</div>
		               	
	               </div>


	               </div>
	            </div>
	          </div>

	         
	         <?php	
	            }
	            ?>

	            <hr class="m-5">
	         <div class="row">
	         	<div class="col-md-12 text-center">
	         		<h2>Total Amount=<?php echo $total;?></h2>
	         	</div>
	         </div>
	      </div>
      </div>
		
		<?php include 'footer.php';?>
   </body>
</html>