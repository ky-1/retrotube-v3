<?php 
            $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $statement->bind_param("s", $_SESSION['profileuser3']);
            $statement->execute();
            $result = $statement->get_result();
            while($row = $result->fetch_assoc()) {
                if ($row['banned'] == '1') {
                    header("Location: banned.php");
              }
            }
            ?>