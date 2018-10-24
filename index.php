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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
</head>
<style>

body {  background-color: #efefef;
        background-image: url("img.jpg");

} 
</style>
<body >

    <div class="site-wrapper">
                    <form class="form-signin" action="index.php" method="POST">
                  
                    <div class="container">

                    <div class="col-lg-4 col-lg-offset-4"  style="margin-top:16%">
                        <label for="username">User Name:</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="User Name"> <br>

                        <label for="password">Password:</label>
                        <input class="form-control" type ="password" name="password" id="password" placeholder="Password">

                        <br>
                        <button class="btn btn-primary center-block btn-lg" type="submit" name="login">Login</button> 
                        
                    </div> 

                    
                   

                    </form>
    </div>
</body>

</html>