<?php 
    
    session_start();
    
    if(isset($_SESSION['unique_id'])){
    	include_once "connection.php";
    	$outgoing_id = mysqli_real_escape_string($connect,$_POST['msg-going']);
    	$incoming_id = mysqli_real_escape_string($connect,$_POST['msg-receive']);
    	$message = mysqli_real_escape_string($connect,$_POST['message']);

    	if(!empty($message)){
            $sql = mysqli_query($connect,"INSERT INTO messages(incoming_id,outgoing_id,message)
                   VALUES({$incoming_id},{$outgoing_id},'{$message}')") or die();
    	}
    }else{
    	header("../login.php");
    }


?>