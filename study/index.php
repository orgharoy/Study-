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
    <link rel="stylesheet" href="index-styles.css">
    <title>Study++</title>
</head>
<body>

  <section class="whole-wrapper">
    <section class="header">
        <nav>
            <a class="logo" href="index.php"><h2>Study<span>++</span></h2></a>
            <a class="sign-out" href="logout.php">Sign Out</a>
        </nav>
    
        <div class="hero-section">
            <h1>Welcome <?php echo $user_data['user_name'];?>,</h1>
            <br>
            <p>Select any option to proceed... </p>
            <br>    
        </div>
    </section>

    <section class="cards-container">   
                <a class="button" href="error.php"><h4>Register for New Subjects</h4></a>         
                <a class="button" href="error.php"><h4>Class Schedule</h4></a>        
                <a class="button" href="error.php"><h4>Midterm Exam Results</h4></a>       
                <a class="button" href="error.php"><h4>Final Exam Results</h4></a>
                <a class="button" href="error.php"><h4>Fees and Payment</h4></a>
                <a class="button" href="error.php"><h4>Online Library</h4></a>                   
    </section>
    
  </section>  

</body>
</html>