<?php 
                                        if(isset($_SESSION['profileuser3'])) {
                                          $stmt = $mysqli->prepare("SELECT * FROM subscribers WHERE sender = ?");
                                          $stmt->bind_param("s", $_SESSION['profileuser3']);
                                          $stmt->execute();
                                          $result = $stmt->get_result();
                                          if($result->num_rows == 0){ echo 'You are not subscribed to any channels.'; }
                                          while($row = $result->fetch_assoc()) {
                                            $pid = idFromUser($row['receiver']);
                                            $rows = getSubscribers($row['receiver'], $mysqli);
echo "
<div class='user'>
				    	<div class='user-info'>
						    <div><a href='./profile.php?user=".$row['receiver']."'>".$row['receiver']."</a></div>
						    <div><span class='black'>".$rows."</span> subscribers</div>";
                            if(isset($_SESSION['profileuser3'])) {
                                if(ifSubscribed($_SESSION['profileuser3'], $row['receiver'], $mysqli) == false) {
                               echo '<div><a href="subscribe.php?user='.$row['receiver'].'"><img src="buttonsub.png"></a></div></div>';
                               } else { 
                                echo '<div><a href="unsubscribe.php?user='.$row['receiver'].'"><img src="buttonunsub.png"></a></div></div>';
                                 } 
                                } else {
                                    echo "<div><a onclick='alert('You are not logged in.')'><img src='buttonsub.png'></a></div></div>";
                                }
                            echo "
					    </div>
					    <div><a href='./profile.php?user=".$row["receiver"]."'><img class='user-picture' src='./pfp/".$pid."'></a></div>
				    <hr>";
                                         }
                                        }