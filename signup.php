<?php
    session_start();
    
    include("connection.php");
    include("functions.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Signup</title>
</head>
<body>
    <style type="text/css">

    #text{
        height: 25px;
        border-radius: 5px;
        padding: solid thin #aaa;
        width: 100%;
    }
    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }
    #box{
        background-color: gray;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
    </style>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Singup"><br><br>
            <a href="login.php">Click to Login</a><br><br>
        </form>
    </div>
</body>
</html>