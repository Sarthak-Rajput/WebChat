<?php
   session_start();
   if(isset($_SESSION['unique_id'])){
     header("location: account.php");
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Chat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <section class="enter row">
            <header>Web Chat Application</header>
            <form action="#">
                <div class="page"></div>
                
                <div class="row1 input">
                    <label>Email Id</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="row1 input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                
                <div class="row1 btn">
                    <input type="submit" value="Continue to chat">
                </div>
            </form>
            <div class="ok">Create your Account! <a href="index.php">Sign Up</a></div>
        </section>
    </div>
    <script src="JS/hide.js"></script>
    <script src="JS/login.js"></script>
</body>
</html>