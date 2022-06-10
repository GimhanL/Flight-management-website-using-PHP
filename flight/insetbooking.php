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
	if(isset($_POST['submit'])){
		include("DBConnection.php");
		$name = $_POST['name'];
		$from1 = $_POST['from'];
		$to1 = $_POST['to'];
		$depart= $_POST['depart'];
		$radio1= $_POST['radio1'];
		$radio=$_POST['radio'];

		$sql = "Insert into bookings values('$name','$from1','$to1','$depart','$radio1','$radio')";

		//$sql = "INSERT INTO userdetails (student_name,student_Uname,student_pass,student_gen) values('$student_name','$student_uname','$student_pass','student_gender')";

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
		echo "submit the form first";
	}
?>
        <form name="form" method="post" action="home.html">
            <center>

                <input name="back" type="submit" value="back" />
                <br />
            </center>
            <p>
        </form>
</body>

</html>