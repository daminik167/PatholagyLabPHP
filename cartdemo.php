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
    
    <table class="table">
    	<tr>
    		<td>
    			Patient name
    		</td>
    	</tr>

    	<tr>
    		<td>
    			Test name
    		</td>
    	</tr>

    	<tr>
    		<td>
    			Test price
    		</td>
    	</tr>

						

	         <?php
	           
	            $q=pg_query("select * from tblapp,tbluser,tbltest,tbldoctor where tblapp.pid=tbluser.pid and tblapp.tid=tbltest.tid and tblapp.did=tbldoctor.did and tblapp.pid=".$_SESSION['pid']);
	            while ($r=pg_fetch_array($q)) {
	            	?>

	          
		   				<tr>
		   					<td><?php echo $r['pname'];?></td>
		   				</tr>
		   				<tr>
		   					<td><?php echo $r['tname'];?></td>
		   				</tr>
		   				<tr>
		   					<td><?php echo $r['tprice'];$total+=$r['tprice'];?></td>
		   				</tr>
	         
	         <?php	
	            }
	            ?>
    </table>
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