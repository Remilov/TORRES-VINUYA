<?php
    include_once 'config/settings-config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   

    <title>TORRES & VINUYA</title>
    <link rel="stylesheet" href="style.css">   

</head>
<body>
 <style>
    body {
        background-image: url(config/src/css/java/img/bgm.jpg);
    }
 </style>

    <div class="container">
         <h1>Sign In</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
           <center> <input type="email" name="email" placeholder="Email" required> </center> <br>
             <center><input type="password" name="password" placeholder="Password" required></center> 
            <button type="submit" name="btn-signin">Sign In</button> <br>
        </form>

        <h1>Register</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST" class="center-form">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
           <center><input type="text" name="username" placeholder="Username" required> </center> <br>
           <center> <input type="email" name="email" placeholder="Email" required></center> <br>
           <center> <input type="password" name="password" placeholder="Password" required></center>

            <button   
 type="submit" name="btn-signup">Sign Up</button>
        </form>
    </div>
</body>
</html>