<?php
session_start();
$message="";
if(count($_POST)>0) {
    $con = mysqli_connect('localhost','root','','loginpage') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM login WHERE Username='" . $_POST["Username"] . "' and Password = '". $_POST["Password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Username"] = $row['Username'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["ID"])) {
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login Page with Background Image Example</title>
    <style>
        @import "https://fonts.googleapis.com/css?family=Lato:400,700";
        #bg {
            background-image: url(pizza-supreme-lots-pepperoni-vegetables-very-nice-golden-crust-there-artistic-blur-31294766.jpg);
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            filter: blur(5px);
        }
        body {
            font-family: lato, sans-serif;
            color: #4a4a4a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        form {
            width: 350px;
            position: relative;
        }
        form .form-field::before {
            font-size: 20px;
            position: absolute;
            left: 15px;
            top: 17px;
            color: #888;
            content: " ";
            display: block;
            background-size: cover;
            background-repeat: no-repeat;
        }
        form .form-field:nth-child(1)::before {
            background-image: url(pics/user-icon.png);
            width: 20px;
            height: 20px;
            top: 15px;
        }
        form .form-field:nth-child(2)::before {
            background-image: url(pics/lock-icon.png);
            width: 16px;
            height: 16px;
        }
        form .form-field {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
        }

        form input {
            font-family: inherit;
            width: 100%;
            outline: none;
            background-color: #fff;
            border-radius: 4px;
            border: none;
            display: block;
            padding: 0.9rem 0.7rem;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
            color: #4a4a4a;
            text-indent: 40px;
        }
        form .btn {
            outline: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin: 0 auto;
            padding: 0.9rem 2.5rem;
            text-align: center;
            background-color: #47ab11;
            color: #fff;
            border-radius: 4px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
            font-size: 17px;
        }
    </style>
</head>
<body>
<div id="bg"></div>
<form name="frmUser" method="post" action="" align="center">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <h3 align="center">Enter Login Details</h3>
    Username:<br>
    <input type="text" name="Username">
    <br>
    Password:<br>
    <input type="password" name="Password">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>