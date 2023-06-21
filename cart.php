<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title>Cart - Pathlogy Lab</title>
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
<?php include 'menu.php';?>

<?php

$q=pg_query("select * from tbluser where pid=".$_SESSION['cid']);
while ($r=pg_fetch_array($q)) {
	?>
	<table class="table">
    	<Tr>
			<td>
				Patient Name
			</td>
			<td>
				<?php
			
	echo $r['pname'];?>
			</td>
		</Tr>

		<Tr>
			<td>
				Test name
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
			<?php
	   echo $r['tprice'];?>
			</td>
	       </Tr>   
		   				
<?php	
}
?>
	<table class="table">
		<Tr>
			<Td>
				Patient Name
			</Td>
			<td>
				Test Discount Price
			</td>
			<td>
				Total
			</td>
		</Tr>

<?php
 $q=pg_query("select * from tblapp,tbluser,tbltest,tblcart where tblapp.pid=tbluser.pid and tblapp.tid=tbltest.tid and tbluser.pid=tblcart.pid and tblapp.pid=".$_SESSION['cid']."'");

//$q=pg_query("select * from tblcart,tbluser,tbltest where tbluser.pid=tblcart.pid and tblcart.cid='".$_SESSION['cid']."'");
while ($r=pg_fetch_array($q)) {
	?>
	<table class="table">
    	<Tr>
			<td>
				Patient Name
			</td>
			<td>
				<?php
			
	echo $r['pname'];?>
			</td>
		</Tr>

		<Tr>
			<td>
				Test name
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
			<?php
	   echo $r['tprice'];?>
			</td>
	       </Tr>   
	
<?php	
}
?>
<tR>
	<td>
Final Total=₹<?php echo $total;?>/-
</td>
</tR>
<tR>
	<Td>
		<a href="billpay.php">Pay</a>
	</Td>
</tR>
<tR>
	<Td>
		<a href="cashondelivery.php">Pay After Reports</a>
	</Td>
</tR>
</table>
<input type="button" class="btn btn-primary" onclick="print()" value="Print">
<table class="table">
<?php include 'footer.php'?>
</body>
</html>