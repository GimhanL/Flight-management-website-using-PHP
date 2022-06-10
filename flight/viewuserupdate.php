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
        
        input {
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>
</head>

<body>
    <?php
if(isset($_POST ['submit']))
{
	include("DBConnection.php");

	$search = $_POST['name'];
	$sql = 'select * from userdetails where uname = "'.$search.'"';

	$result = mysqli_query($conn,$sql) or 
	die("couldn't execute query. ".mysqli_error($conn));

	if (mysqli_num_rows($result)>0)
	{
		// create while loop and loop throughresult set
    $row = mysqli_fetch_array($result);
?>
        <form name="form" method="post" action="updateuserr.php">

            <center>
                <p> Customer Name: </p>
                <p>
                    <input type="text" name="name" value="<?php echo $row['name']?> " />
                    <br> Customer Username : </p>
                <p>
                    <input type="text" name="uname" value="<?php echo $row['uname']?> " />
                    <br> Password :</p>
                <p>
                    <input type="text" name="Pass" value="<?php echo $row['Pass']?> " />
                    <br> Gender :</p>
                <p>
                    <input type="text" name="gender" value="<?php echo $row['gender']?> " />
                    <br>

                    </div>
                    <input name="update" type="submit" value="update" />
                    <br />
                    <p>
        </form>
        <?php
	}
	else{
		echo"no result found";
	    }
}
else
{
	header ("location ;form.html");//if form not submited
}
?>
</body>

</html>