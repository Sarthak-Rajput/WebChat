<?php 
   session_start();
   include_once 'connection.php';

   $outgoing_id = $_SESSION['unique_id'];

   $sql = mysqli_query($connect,"SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
   $output = "";
   
   if(mysqli_num_rows($sql)==0){
        $output .= "No one is online ";
   }elseif(mysqli_num_rows($sql)>0){
       include 'data.php';
   }
   
   echo $output;
?>
