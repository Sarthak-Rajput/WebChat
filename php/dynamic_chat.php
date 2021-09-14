<?php 
   
    session_start();
    
    if(isset($_SESSION['unique_id'])){
    	include_once "connection.php";
    	$outgoing_id = mysqli_real_escape_string($connect,$_POST['msg-going']);
    	$incoming_id = mysqli_real_escape_string($connect,$_POST['msg-receive']);
    	$output = "";

    	$sql = "SELECT * FROM messages
                LEFT JOIN users ON users.unique_id = messages.outgoing_id
             	 WHERE (incoming_id ={$incoming_id} AND outgoing_id ={$outgoing_id})
    	        OR (incoming_id ={$outgoing_id} AND outgoing_id ={$incoming_id}) ORDER BY msg_id";
    	$query = mysqli_query($connect,$sql);

    	if(mysqli_num_rows($query)>0){
    		while ($row = mysqli_fetch_assoc($query)) {
    			if($row['outgoing_id']=== $outgoing_id){       //he is a sender if this is true
                     
                     $output .= '<div class="area outgoing">
                                   <div class="function">
                                       <p>'. $row['message'] .'</p>
                                    </div>
                                </div>';

    			} else{                                      //he is a receiver                                     
                      
                     $output .= '<div class="area incoming">
                                 <img src="php/images/'. $row['image'] .'" alt="">
                                 <div class="function">
                                     <p>'. $row['message'] .'</p>
                                 </div>
                                </div>';

    			}
    		}
    		echo $output;
    	}

    	
    }else{
    	header("../login.php");
    }



?>