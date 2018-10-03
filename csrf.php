<?php

    session_start();

    function generateToken($sessionId){
        $length = 32;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $randomString .= $sessionId[rand(0, strlen($sessionId) - 5)];

        return $randomString;
    }

    if(isset($_POST['csrfSubmit'])){

        if($_COOKIE["csrf_token"] == $_POST['token']){
            echo "Success";
        }
        else{
            echo "Error";
        }
    }

?>