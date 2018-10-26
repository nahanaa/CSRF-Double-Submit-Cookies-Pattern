<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
    <title>Document</title>
</head>

<style>
body {  background-color: #efefef;
        background-image: url("img.jpg");

} 
</style>

<body>
    
<form action="csrf.php" method="POST">
    <input type="hidden" id="token" name="token" value="token">

    <div class="container">

    <h1 style="margin-left: 27%;"> You Have Successfully Logged in! </h1>

                    <div class="col-lg-4 col-lg-offset-4"  style="margin-top:16%">
                        <label for="Account Details">Account Number:</label>
                        <input class="form-control" type="text" name="account details" id="accountdetails" placeholder="Account Number"> <br>

                        <label for="Amount">Amount LKR :</label>
                        <input class="form-control" type ="text" name="amount" id="amount" placeholder="Amount">

                        <br>
                        <button class="btn btn-primary center-block btn-lg" type="submit" name="csrfSubmit">Submit</button>
                        
                    </div> 
   
</form>
</body> 
</html>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script> 
        function extractToken() {
            
            var cookieName = "csrf_token=";
            var decodedCookies = decodeURIComponent(document.cookie);
            var cookies = decodedCookies.split(";");

            var token = null;

            for (var c in cookies) {

                var cookie = cookies[c];

                while (cookie.charAt(0) == ' ') {
                    cookie = cookie.substring(1);
                }

                if (cookie.indexOf(cookieName) == 0) {
                    token = cookie.substring(cookieName.length, cookie.length);
                }
            }

            return token;
        }
            
        function appendToken() {
            document.getElementById("token").value = extractToken();
        }

        $(document).ready(function () {
            appendToken();
        });
    </script>
    
</body>
</html>