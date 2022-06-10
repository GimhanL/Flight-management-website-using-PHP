<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <style>
        body {
            background-color: whitesmoke;
        }
        
        input {
            width: 40%;
            height: 5%;
            border-radius: 1px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>
</head>

<body>
    <center>
        <form action="" method="post">
            <input type="text" name="name" placeholder="enter customer name">
            <input type="submit" name="search" value="search data">

        </form>
        <?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'authentication');
		if(isset($_post['search'])){
			$name = $_POST['name'];
			$query = "SELECT * FROM bookings where name='$name' ";
			$query_run= mysqli_query($connection,$query);
			while($row = mysqli_fetch_array()){

				?>
            <form action="" method="POST">

                <input type="text" name="name" value="<?php echo $row['name'] ?>" />
                <input type="text" name="from" value="<?php echo $row['from'] ?>" />
                <input type="text" name="to" value="<?php echo $row['to'] ?>" />
                <input type="text" name="depart" value="<?php echo $row['depart'] ?>" />
                <input type="text" name="combo" value="<?php echo $row['combo'] ?>" />
                <input type="text" name="radio" value="<?php echo $row['radio'] ?>" />

            </form>
            <?php
			}
		}

		?>

    </center>
</body>

</html>