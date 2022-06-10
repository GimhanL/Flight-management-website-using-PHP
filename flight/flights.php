<?php
if(isset($_POST ['submit']))
{
	include("DBConnection.php");

	$search = $_POST['name'];
	$sql = 'select * from flights where fnname = "'.$search.'"';

	$result = mysqli_query($conn,$sql) or 
	die("couldn't execute query. ".mysqli_error($conn));

	if (mysqli_num_rows($result)>0)
	{
		// create while loop and loop throughresult set
    $row = mysqli_fetch_array($result);

?>

    <!DOCTYPE html>

    <html>

    <head>
        <style>
            body {
                background-color: whitesmoke;
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

        <h3> Search Details </h3>
        <form name="form" method="post" action="">
            <center>
                <input type="text" name="name" />
                <input type="submit" name="submit" value="search" />
                <br> Company name :
                <input type="text" name="cname" value="<?php echo $row['cname']?> " />
                <br> Date :
                <input type="text" name="date" value="<?php echo $row['date']?> " />
                <br> Depature :
                <input type="text" name="depature" value="<?php echo $row['depature']?> " />
                <br> Depature time:
                <input type="text" name="dtime" value="<?php echo $row['dtime']?> " />
                <br> Arrival :
                <input type="text" name="arrival" value="<?php echo $row['arrival']?> " />
                <br> capacity :
                <input type="text" name="capacity" value="<?php echo $row['capacity']?> " />
                <br> Price :
                <input type="text" name="price" value="<?php echo $row['price']?> " />
                <br>

                <br />
            </center>
        </form>
        <?php
	}
	else{
		echo"no result found";
	    }
}

?>
    </body>

    </html>