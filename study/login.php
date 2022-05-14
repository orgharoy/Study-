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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<p align = center> Wrong Username or Password! </p>";
		}else
		{
			echo "<p align = center> Wrong Username or Password! </p>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Study++ Login</title>
</head>
<body>
    <h1>Study<span>++</span></h1>

    <div class="login-box">
        <img class="login-image" src="images\Loginimage1.png" alt="login icon">

        <h3>Login</h3>
        <form method="post"> 
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Input your username...">
            <p>Password</p>
            <input type="password" name="password" placeholder="Input your password...">
            <input type="submit" value="Login">
            <a href="https://youtu.be/dQw4w9WgXcQ">Forgot your password?</a>
            <a href="signup.php">Click here to &nbsp<span> sign up</span></a>
        </form>
    </div>
</body>
</html>