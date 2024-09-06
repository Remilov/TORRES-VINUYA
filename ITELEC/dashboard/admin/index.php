<?php
require_once 'authentication/admin-class.php';

$admin = new ADMIN();

if(!$admin->isUserLoggedIn())
{
    $admin->redirect('../../');
}

$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            background-color: rgb(168, 168, 168);
            font-family: 'Verdana', sans-serif;
        }
        
        h1 { 
            background-color: white;
            padding: 30px;
            margin: 0 auto; 
            width: 40%;  
            height:auto;
            border-radius: 10px;
            text-align: center;
            font-family: 'Verdana', sans-serif; 
        }

        button {
            background-color: #7982ff;
            display: block; 
            margin: 10px auto; 
            border-radius: 10px;
            width: 150px;
            color: white;
            font-family: 'Verdana', sans-serif;
            text-align: center;
            border: none;
            padding: 10px;
        }

        button a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body> <br><br><br><br><br>

    <h1>Welcome to ITELEC2! <?php echo $user_data['email']?></h1>
    <button><a href="authentication/admin-class.php?admin_signout">SIGN OUT</a></button>
</body>
</html>
