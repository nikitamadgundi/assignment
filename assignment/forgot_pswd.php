<?php




?>


<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<style type="text/css">
        #text
        {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button
        {
            width: 100px;
            background-color: Lightblue;
            padding: 10px;
            color: white;
            border: none;
        }

        #box
        {
            width: 500px;
            background-color: pink;
            padding: 20px;
            margin: auto;
            height: 300px;
        }


    </style>
    
<div id="box">
    <form method= "POST">
        <div style ="font-size:20px; margin:10px;color:white">Login
    </div>

<h4>Enter Username</h4>
    <input type="text" name="user_name">
    
    <h4>Enter Secrete Code</h4>
    <input type="text" name="secrete"><br><br>

    <input type="submit" name="sign in">
</form>
</div>
    
</body>
</html>