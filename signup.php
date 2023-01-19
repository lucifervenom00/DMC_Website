<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $con=mysqli_connect("localhost","root","","login");
    $sql="INSERT INTO `user_records`(`name`, `username`, `email`, `password`, `cpassword`) VALUES ('$name','$username','$email','$password','$cpassword')";
    $query=mysqli_query($con,$sql);
    if($query){
        echo"<script><alert>Welcome!</alert></script>";
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join DesignHub</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Khojki:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url(4.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .logo {
            padding-top: 20px;
        }

        .logo img {
            width: 6%;
            margin-left:20px ;
            
        }

        .signup {
            font-family: 'Poppins', sans-serif;
            color: white;
            width: 600px;
            background-color: #2F3554;
            justify-content: center;
            margin-left: 341px;
            margin-top: 78px;
            border-radius: 6px;
            padding: 16px;
        }

        .titl {
            text-align: left;
            font-family: 'Noto Serif Khojki', serif;
            padding-left: 20px;
            color: #  ,maabcd3;

        }

        .name input {
            padding: 5px 12px;
            font-size: 14px;
            line-height: 20px;
            width: 45%;
            border-radius: 6px;
            border: 1px solid black;
            margin-top: 4px;
            margin-bottom: 16px;
        }

        .mail input,
        .pass input {
            padding: 5px 12px;
            font-size: 14px;
            line-height: 20px;
            width: 95%;
            border-radius: 6px;
            border: 1px solid black;
            margin-top: 4px;
            margin-bottom: 16px;
        }

        .sigbtn input {
            margin-top: 4px;
            background-color: #0066FF;
            width: 98%;
            font-size: 14px;
            position: relative;
            display: inline-block;
            padding: 5px 16px;
            font-size: 14px;
            font-weight: var(--base-text-weight-medium, 500);
            line-height: 20px;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            color: white;
            user-select: none;
            border: none;
            border-radius: 6px;
            -webkit-appearance: none;
            appearance: none;
        }

        .terms {
            font-size: 14px;
            padding-bottom: 12px;
        }

        .terms a {
            font-size: 14px;
            color: #0066FF;
            text-decoration: none;
        }

        .terms a:hover {
            border-bottom: 1px solid currentColor;
            
            
        }

        
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
        <a href="#"><img src="logo3.1.png"></a>
        </div>
    </div>
    <form method="post">
        <div class="signup">

            <div class="titl">
                <span>Welcome To DesignHub!</span><br>
                <span>Let's begin the journey</span>
            </div>
            <div class="name">
                <input type="text" placeholder="First Name" name="name"required>
                <input type="text" placeholder="Username" name="username"required>
            </div>
            <div class="mail">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="pass">
                <input type="password" placeholder="Password" name="password"><br>
                <input type="password" placeholder="Confirm Password" name="cpassword">
            </div>
            <div class="terms">
                <input type="checkbox">I accept all <a href="#">Terms and Conditions</a>.
            </div>
            <div class="sigbtn">
                <input type="submit" value="Sign Up" name="submit">
            </div>
        </div>
    </form>

</body>

</html>
