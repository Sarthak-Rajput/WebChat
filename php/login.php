<?php
      
    session_start();
    include_once "connection.php";
   
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($connect,"SELECT * FROM users WHERE email='{$email}'");
        
        if(mysqli_num_rows($sql)>0){
            $row = mysqli_fetch_assoc($sql);
            
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            
            if($user_pass == $enc_pass){
            	
            	$status ="Active Now";
            	
            	$sql2 = mysqli_query($connect, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");

            	if($sql2){
            		$_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
            	}else{
            		echo "Something went wrong. Please try again!";
            	}
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
        	echo "$email - This email not Exist!";
        }
    }else{
    	echo "All input fields are necessary";
    }
?>