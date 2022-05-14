<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: accountdone.php");
			die;
		}else
		{
			echo "<p align = center> Please enter some valid information! </p>";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Study++ Signup</title>
</head>
<body>
    <h1>Study<span>++</span></h1>

    <div class="login-box">
        <img class="login-image" src="images/New User Image.png" alt="New User">

        <h3>Sign Up</h3>
        <form method ="post">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Input your desired username...">
            <p>Password</p>
            <input type="password" name="password" placeholder="Input your desired password...">
            <input type="submit" value="Sign Up">
            <a href="login.php">Back to login page</a>
        </form>
    </div>
</body>
</html>