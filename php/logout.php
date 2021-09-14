<?php  

   session_start();
   
   if(isset($_SESSION['unique_id'])){
     include_once 'connection.php';
     
     $logout_id = mysqli_real_escape_string($connect,$_GET['logout_id']);
     if(isset($logout_id)){
     	$status = "Offline Now";
     	$query = "UPDATE users SET status = '{$status}' WHERE unique_id={$logout_id}";
     	$sql = mysqli_query($connect,$query);

     	if($sql){
     		session_unset();
            session_destroy();
            header("location: ../login.php");
     	}
       }else{
     	    header("location: ../account.php");	
     	}

   }else{
   	header("location: ../login.php");
   }




?>