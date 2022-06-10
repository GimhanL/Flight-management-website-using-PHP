<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <style>
        body {
            background-image: url("images/787275.jpg");
            height: 800px;
            background-size: cover;
            background-position: center;
            padding-top: 20px;
        }
    </style>
</head>

<body>

    <?php

	$user_pass= $_POST['Pass'];
$CPass = $_POST['CPass'];
	if(isset($_POST['submit'])){
		include("DBConnection.php");
		if(strcmp($user_pass,$CPass)==0){

		$user_name = $_POST['name'];
		$user_uname = $_POST['uname'];
		$user_pass= $_POST['Pass'];
		$user_gender=$_POST['gender'];

		$sql = "Insert into userdetails values('$user_name','$user_uname','$user_pass','$user_gender')";

		//excute sql query
		$results =mysqli_query($conn,$sql);
		if(!$results){
			echo'<br>';
			die ('could not enter data'.mysqli_error($conn));
		}
		else{
			echo'<br>';
			echo "Entered data successfully\n";
		}
		}
	else{
	echo "Password and confirm password are not matching!";	
	}

	}

?>
</body>

</html>