<?php
session_start();

include("connection.php");
//include("function.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //somthing was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($passwword))
    {

        //save to database
        $query = "select * from users where user_name = $user_name";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password']===$password)
                {
                    $_SESSION['user_name']=$user_data['user_name'];
                    header("Location: Comment.php");
                    die;
                }
            }
        }
            //echo"Wrong username or password";


    }else
    {
        echo"Wrong username or password";
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
            width: 500px;
            background-color: pink;
            padding: 20px;
            margin: auto;
            height: 500px;
        }


    </style>



<div id="box">
    <form method= "POST">
        <div style ="font-size:20px; margin:10px;color:white">Login
    </div>
    
    <h3>Do not have an account <a href ="sign_up.php">Click here to Signup</a><br><br>
   </h3>
   <h4>Username<h4>
    <input id="text" type="text" name="user_name"><br>
    <h4>Password<h4>
    <input id="text" type="password" name="password"><br><br>
    <a href ="forgot_pswd.php">forgot password</a><br><br>
    <input id="button" type="submit" name="Login"><br><br>



    </form>
    </div>



</body>
</html>
    