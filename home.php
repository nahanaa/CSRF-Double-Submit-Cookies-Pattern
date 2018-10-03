<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="csrf.php" method="POST">
    <input type="hidden" id="token" name="token" value="token">

    <button type="submit" name="csrfSubmit">Submit</button>
</form>

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