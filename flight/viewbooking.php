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
	$sql = 'select * from bookings where name = "'.$search.'"';

	$result = mysqli_query($conn,$sql) or 
	die("couldn't execute query. ".mysqli_error($conn));

	if (mysqli_num_rows($result)>0)
	{
		// create while loop and loop throughresult set
    $row = mysqli_fetch_array($result);
?>
        <form name="form" method="post" action="updatebooking.php">

            <center>
                <p>Customer name : </p>
                <p>
                    <input type="text" name="name" value="<?php echo $row['name']?> " />
                    <br> From : </p>
                <p>
                    <input type="text" name="from1" value="<?php echo $row['from1']?> " />
                    <br> To :</p>
                <p>
                    <input type="text" name="to1" value="<?php echo $row['to1']?> " />
                    <br> Depature Date :</p>
                <p>
                    <input type="text" name="depart" value="<?php echo $row['depart']?> " />
                    <br> Class :</p>
                <p>
                    <input type="text" name="combo" value="<?php echo $row['combo']?> " />
                    <br> Method :</p>
                <p>
                    <input type="text" name="radio" value="<?php echo $row['radio']?> " />
                    <br>

                    <input name="update" type="submit" value="update" />
                    <br />
                </p>
            </center>
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