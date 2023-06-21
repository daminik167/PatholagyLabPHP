<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'?>
	<title></title>

<!-- For mobile responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
  <!-- bootstrap cdn -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
	
</head>
<body>
<?php include 'menu.php'?>
	<div class="row">
		<div class="col-md-6">
<form method="post">
	<table class="table">


	<?php
		
		if(isset($_POST["btnsave"])){
			extract($_POST);
			pg_query("insert into tblfeedback(feedback,pid) values('$txtfeedback','".$_SESSION['pid']."')");

		}
	?>

	
<form method="post">
	<table class="table">
		  
		<tr>
			<td>
				Feedback
			</td>
			<td>
				<textarea name="txtfeedback" class="form-control"></textarea>
			</td>
		</tr>
		
		<tr>
			<Td colspan=2 align="center">
				<input type="submit" class="btn btn-primary" name="btnsave" value="Send">
			</Td>
		</tr>
	</table>
</form>
</div>
</div>
<?php include 'footer.php'?>
</body>
</html>