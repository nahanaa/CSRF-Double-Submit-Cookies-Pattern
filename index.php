<?php
    session_start();
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=='Nahanaa' && $password=='Nahanaa'){
            
            session_regenerate_id();
            setcookie("csrf_session",session_id());

            include("csrf.php");
            $token=generateToken(session_id());

            setcookie("csrf_token",$token);
            header('location: ./home.php');
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="./style.css"> 
    
</head>

<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="inner cover">
                    <h1 class="cover-heading">Login</h1>
                    <form class="form-signin" action="index.php" method="POST">
                        <input type="text" name="username" id="username">
                        <input type="text" name="password" id="password">
                        <button type="submit" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>