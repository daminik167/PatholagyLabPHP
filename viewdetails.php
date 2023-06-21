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
<?php
if(isset($_POST['btnaddcart'])){
	extract($_POST);
	pg_query("insert into tblcart(pid,qty,uid)values('".$_GET["id"]."','$txtqty','".$_SESSION['uid']."')");
}

?>
<div class="row">
<?php
$q=pg_query("select * from tblproduct where pid=".$_GET["id"]);
while ($r=pg_fetch_array($q)) {
	?>
	<div class="col-md-3">
		<div class="card">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
  <div class="card-body">
    <h5 class="card-title">Product Details</h5>
    <p class="card-text"><table>
		<Tr>
			<td>
				Product Name
			</td>
			<td>
				<?php
	echo $r['pname'];?>
			</td>
		</Tr>
		<Tr>
			<td>
				Product Price
			</td>
			<td>
				<strike><?php
	echo $r['pprice'];?></strike>
			</td>
		</Tr>
		<Tr>
			<td>
				Product Discount Price
			</td>
			<td>
				<?php
	echo $r['pdprice'];?>
			</td>
		</Tr>



	</table></p>
	<form method="post">
		<input type="number" name="txtqty" class="form-control">
    <input type="submit" name="btnaddcart" value="Add2Cart" class="btn btn-warning">
  </form>
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