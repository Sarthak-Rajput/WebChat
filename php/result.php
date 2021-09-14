<?php 
   
   include_once 'connection.php';
   session_start();
   
   $outgoing_id = $_SESSION['unique_id'];
  
   $search = mysqli_real_escape_string($connect,$_POST['search']);
   $output = "";

   $sql = mysqli_query($connect,"SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (first_name LIKE '%{$search}%' OR last_name LIKE '%{$search}%')");
   
   if(mysqli_num_rows($sql)>0){
        include 'data.php';
   }else{
       $output .= "No result found";
   }
   
   echo $output;

?>