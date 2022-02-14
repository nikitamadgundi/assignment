<?php
session_start();

    include("connection.php");
    //include("function.php");
    
    //$user_data = check_login($con);
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //somthing was posted
        $user_name = $_POST['user_name'];
        $passwword = $_POST['password'];
        $secrete = $_POST['secrete'];
        if(!empty($user_name) && !empty($passwword) && !empty($secrete))
        {

            //save to database
            $query = "insert into mylogin (user_name,password,secrete) values ('$user_name','$password','$secrete')";
            mysqli_query($con, $query);

            header("Location: sign_in.php");
            die;

        }else
        {
            echo "please enter some valid information!";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Comment App</title>
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
            width: 300px;
            background-color: pink;
            padding: 20px;
            margin: auto;
        }


    </style>


<div id="box">
    <form method= "POST">
        <div style ="font-size:20px; margin:10px;color:white">Sign Up
    </div>
    <h4>Enter Username<h4>
    <input id="text" type="text" name="user_name"><br><br>
    <h4>Enter Password<h4>
    <input id="text" type="password" name="password"><br><br>
    <h4>Enter Secrete Code<h4>
    <input id="text" type="text" name="secrete"><br><br>
    <input id="button" type="submit" name="SignUp"><br><br>

    <a href ="sign_in.php">Click here to Login</a><br><br>


    </form>
    </div>



</body>
</html>
    