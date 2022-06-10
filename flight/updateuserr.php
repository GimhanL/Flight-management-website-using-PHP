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

$name = $_POST['name'];
		$uname = $_POST['uname'];
		$Pass = $_POST['Pass'];
		$gender= $_POST['gender'];

	$sql = "update userdetails set uname = '$uname',Pass = '$Pass' ,gender = '$gender' where name ='$name'";

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

        <form name="form" method="post" action="adminhome.html">
            <center>

                <input name="back" type="submit" value="back" />
                <br />
            </center>
            <p>
        </form>

</body>

</html>