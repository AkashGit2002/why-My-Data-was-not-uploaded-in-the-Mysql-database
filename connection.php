<?php

$username="root";
$password="";
$server='localhost';
$db='crudyoutube';

$con=mysqli_connect($server,$username,$password,$db);

if($con){
	echo "Connection Successfull";
	?>
	<script>
		alert("ok");
	</script>
<?php
}
else{
	die("no connection" . mysqli_connect_err());
}
?> 
