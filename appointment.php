<!DOCTYPE html>
<html style="    overflow-x: hidden;">
   <head>
      <?php include 'head.php'?> 	
      <title></title>
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
         pg_query("insert into tblapp(papdate,paptime,tid,pid,did,status) values ('$txtappdate','$txtapptime','$cmbtest','".$_SESSION['pid']."','$cmbdoc','Pending')");
         ?>
      <script type="text/javascript">
         alert("Appointment booked Successfully");
      </script>
      <?php
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
         		<h2>Online Appointment</h2>
         		<br>
         		<div class="col-md-12 my-3">
         			<label>Appointment Date</label>
         			<input type="date" name="txtappdate" class="form-control">
         		</div>
         		<div class="col-md-12 my-3">
         			<label>Appointment Time</label>
         			<input type="time" name="txtapptime" class="form-control">
         		</div>
         		<div class="col-md-12 my-3">
         			<label>Select Test</label>
         			<select name="cmbtest" class="form-control">
                        <option>--Select--</option>
                        <?php
                           $q=pg_query("select * from tbltest");
                           while ($r=pg_fetch_array($q)) {
                           	?>
                        <option value="<?php echo $r['tid'];?>"><?php echo $r['tname'];?></option>
                        <?php
                           }	
                           ?>
                     </select>
         		</div>
         		<div class="col-md-12 my-3">
         			<label>Reference By</label>
         			<select name="cmbdoc" class="form-control">
                        <option>--Select--</option>
                        <?php
                           $q=pg_query("select * from tbldoctor");
                           while ($r=pg_fetch_array($q)) {
                           	?>
                        <option value="<?php echo $r['did'];?>"><?php echo $r['dname'];?></option>
                        <?php
                           }	
                           ?>
                     </select>
         		</div>
         		


         		
         		<div class="col-md-12 my-3">
         			<input type="submit" class="btn btn-success" name="btnsave" value="Book">
         		</div>
         	</div>
         	<form method="post">
         </div> 	
      </div>
      <?php include 'footer.php'?>
   </body>
</html>