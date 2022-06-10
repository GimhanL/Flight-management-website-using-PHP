<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <style>
        body {
            background-image: url("images/787275.jpg");
            height: 800px;
            background-size: cover;
            background-position: center;
            padding-top: 20px;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>

</head>

<body>
    <?php
if(isset($_POST['update'])){
	include ('DBConnection.php');

$fnname = $_POST['fnname'];
		$cname = $_POST['cname'];
		$date = $_POST['date'];
		$depature= $_POST['depature'];
		$dtime= $_POST['dtime'];
		$arrival=$_POST['arrival'];
		$capacity =$_POST['capacity'];
		$price = $_POST['price'];

	$sql = "update flights set cname = '$cname',date = '$date' ,dtime = '$dtime',arrival = '$arrival' , capacity ='$capacity', price='$price' where fnname ='$fnname'";

	$result = mysqli_query($conn,$sql);

	//if successfully updated.

	if($result){
		print "successfully updated the table";
	}
else{
	print "unsuccessfully to updated the table".mysqli_error($conn);

}
}
?>
</body>

</html>