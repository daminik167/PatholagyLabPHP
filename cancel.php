<?php
require 'head.php';
pg_query("delete from tblcart where cartid=".$_GET['cartid']);
header("location:viewcart.php");
?>