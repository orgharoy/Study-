<?php

session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="error-styles.css">
    <title>Study++ Error</title>
</head>
<body>

  <section class="whole-wrapper">
    <section class="header">
        <nav>
            <a class="logo" href="index.php"><h2>Study<span>++</span></h2></a>
            <a class="sign-out" href="logout.php">Sign Out</a>
        </nav>
    
        <div class="hero-section">
            <h1>Oops, looks like something went wrong...</h1>
            <br>
            <p>We are working on it. </p>
            <br>    
        </div>
    </section>
  </section>
</body>
</html>  