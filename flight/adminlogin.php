<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        box-shadow: 1px 1px 2px 1px whitesmoke;
    }
</style>
<?php require_once('DBConnection.php'); ?>

    <?php

$errors=array();
$uname='';
$Pass='';

if (isset($_POST['login'])) {

	$Username=$_POST['uname'];
	$Password=$_POST['Pass'];
	$query = "SELECT Pass FROM admin WHERE uname='$Username' && Pass='$Password'";
	$result=mysqli_query($conn,$query);
		if($row=mysqli_fetch_array($result)){
			header('location: adminhome.html');
		}
	else
	{

		echo("Invalid Username or Password!");
	}

}

?>

        <body>

            <html xmlns="http://www.w3.org/1999/xhtml">

            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Untitled Document</title>

            </head>

            <body>
                <center>
                    <h2>Admin Login</h2>
                    </div>

                    <form method="post" action="adminlogin.php">

                        <label>Username:</label>
                        <input type="text" name="uname" required>
                        </div>
                        <div class="input-group">
                            <label>Password:</label>
                            <input type="password" name="Pass" required>
                        </div>
                        <div class="input-group">
                            <button type="submit" name="login" class="btn">Login</button>
                        </div>

                    </form>
                </center>
            </body>

            </html>

        </body>

        </html>