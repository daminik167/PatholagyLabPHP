<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title></title>
</head>
<body>
<?php include 'menu.php';?>

<?php

$q=pg_query("select * from tblcustomer where cid=".$_SESSION['cid']);
while ($r=pg_fetch_array($q)) {
	?>
	<Tr>
		<Td>
			Name
		</Td>
			<Td>
				<?php
			
	echo $r['cname'];?>
			</Td>
		</Tr>
		<Tr>
			<td>
				Address
			</td>
			<td>
				<?php
	echo $r['caddress'];?>
			</td>
		
		</tr>
	
<?php	
}
?>
	<table class="table">
		<Tr>
			<Td>
				Jewellery Name
			</Td>
			<td>
				Jewellery  Offer Price
			</td>
			<td>
				Quantity
			</td>
			<td>
				Total
			</td>
		</Tr>

<?php

$q=pg_query("select * from tblcart,tbljewellery where tbljewellery.jid=tblcart.jid and tblcart.cid='".$_SESSION['cid']."'");
while ($r=pg_fetch_array($q)) {
	?>
	<Tr>
			<Td>
				<?php
			
	echo $r['jname'];?>
			</Td>
			<td>
				₹<?php
	echo $r['jofferprice'];?>/-
			</td>
			<td>
				<?php
	echo $r['qty'];?>
			</td>
			<td>
				₹<?php $total=$r['jofferprice']*$r['qty']; $ftotal+=$total;
				echo $total;?>/-
			</td>
		
			
		</tr>
	
<?php	
}
?>
<tR>
	<td>
Final Total=₹<?php echo $ftotal;?>/-
</td>
</tR>
<tR>
	<Td>
		<a href="billpay.php">Pay</a>
	</Td>
</tR>
<tR>
	<Td>
		<a href="cashondelivery.php">Cash On Delivery</a>
	</Td>
</tR>
</table>
<input type="button" onclick="print()" value="Print">
<table class="table">

</body>
</html>