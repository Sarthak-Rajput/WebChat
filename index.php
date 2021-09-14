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
        <section class="signup row">
            <header>Web Chat Application</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="page"></div>
                <div class="details">
                    <div class="row1 input">
                     <label>First Name</label>
                     <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="row1 input">
                     <label>Last Name</label>
                     <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    
                </div>
                <div class="row1 input">
                    <label>Email Id</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="row1 input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="row1 image">
                    <label>Choose Profile</label>
                    <input type="file" name="image" required>
                </div>
                <div class="row1 btn">
                    <input type="submit" value="Continue to chat">
                </div>
            </form>
            <div class="ok">Already have an Account? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    <script src="JS/hide.js"></script>
    <script src="JS/index.js"></script>
</body>
</html>