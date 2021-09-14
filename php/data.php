<?php 

while ($row=mysqli_fetch_assoc($sql)) {

           $sql2 = "SELECT * FROM messages WHERE (incoming_id = {$row['unique_id']}
                OR outgoing_id = {$row['unique_id']}) AND (outgoing_id = {$outgoing_id} 
                OR incoming_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

           $query2 = mysqli_query($connect,$sql2);
           $row2 = mysqli_fetch_assoc($query2);
           if(mysqli_num_rows($query2)>0){
               $result = $row2['message'];
           }else{
               $result = "No recent messages";
           }


           (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
           if(isset($row2['outgoing_id'])){
            ($outgoing_id == $row2['outgoing_id']) ? $you = "You: " : $you = "";
            }else{
              $you = "";
            }

            ($row['status'] == "Offline Now") ? $offline = "offline" : $offline = "";

       	  $output .= '<a href="page.php?user_id=' .$row['unique_id'].'">
                            <div class="col1">
                             <img src="php/images/' . $row['image'] .'" alt="">
                                <div class="function">
                                 <span>'. $row['first_name'] . " " .$row['last_name'] . '</span>
                                  <p>'. $you . $msg .'</p>
                                </div>
                            </div>
                            <div class="current '. $offline .'"><i class="fas fa-circle"></i></div>
                      </a>';
       }

?>