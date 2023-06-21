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



<div class="row">
	<br>
	<br>
	<br>
<?php

$q=pg_query("select * from tblreport,tbltest where tbltest.tid=tblreport.tid and tblreport.pid=".$_SESSION['pid']);
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-4">
		<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Test Details</h5>
    <p class="card-text"><table class="table">
		<Tr>
			<td>
				Test Name
			</td>
			<td>

				<?php
			
	echo $r['tname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				Test Price
			</td>
			<td>
				<strike><?php
	echo $r['tprice'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Test Discount Price
			</td>
			<td>
				<?php
	echo $r['tdprice'];?>
			</td>
		</Tr>
<Tr>
			<td>
				Date
			</td>
			<td>
				<?php
	echo $r['ddate'];?>
			</td>
		</Tr>

		<tr>
			<td>
			View	Report
		</td>
		<td>
		<a href="admin/<?php echo $r['pdfreport'];?>">	Click Here</a>
		</td>
	</tr>

	</table></p>
    <a href="viewdetails.php?id=<?php echo $r['pid'];?>" class="btn btn-primary">View Details</a>
  </div>
</div>
	
</div>
<?php	
}
?>
</div>
<?php include 'footer.php';?>
</body>
</html>