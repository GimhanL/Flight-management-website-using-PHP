<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style>
			body{
			background-image: url("images/787275.jpg");
	height: 800px;
	background-size: cover;
	background-position: center;
	padding-top: 20px;
		}
	
	
	
	</style>
</head>

		<form name="form" method="post" action="home.html">
	<center>
			<br>
		<br>
	  <input name="back" type="submit" value="Back" />	
</center>
	
	

<body>
<p>
  <?php
if(isset($_POST['delete'])){
	include ('DBConnection.php');
	
	$name = $_POST['name'];
	$from1 = $_POST['from1'];
	$to1 = $_POST['to1'];
	$depart = $_POST['depart'];
	$combo = $_POST['combo'];
	$radio = $_POST['radio'];
	
	
	
	 $sql = "DELETE FROM bookings WHERE name = '$name'" ;
	
	$result = mysqli_query($conn,$sql);
	
	//if successfully deleted.
	
	if($result){


		 print  "successfully deleted! ";
	}
else{
	print "unsuccessfully to deleted!".mysqli_error($conn);
	
}
}
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>