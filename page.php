<?php
   session_start();
   if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
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
        <section class="chat">
           <header>
              <?php 
                 include_once 'php/connection.php';
                 $user_id = mysqli_real_escape_string($connect,$_GET['user_id']);
                 $sql = mysqli_query($connect,"SELECT * FROM users WHERE unique_id={$user_id}");
                 if(mysqli_num_rows($sql)>0){
                     $row = mysqli_fetch_assoc($sql);
                    }
               ?>
                <a href="account.php" class="icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['image'];?>" alt="">
                <div class="function">
                   <span><?php echo $row['first_name'] ." " .$row['last_name']; ?></span>
                   <p><?php echo $row['status'];?></p>
                </div>
               
           </header>
           <div class="box">
 

           </div>
           <form action="#" class="send" autocomplete="off">
               <input type="text" name="msg-going" value="<?php echo $_SESSION['unique_id'];?>" hidden>
               <input type="text" name="msg-receive" value="<?php echo $user_id;?>" hidden>
               <input type="text" name="message" class="write" placeholder="Type a message">
               <button><i class="fab fa-telegram-plane"></i></button>
           </form>
        </section>
    </div>

    <script src="JS/page.js"></script>
    
</body>
</html>