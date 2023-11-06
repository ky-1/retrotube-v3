<!DOCTYPE html>
<?php include '../global.php';?>
<?php include '../bancheck.php';?>
<html dark-theme='light'>
<head>
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/upload.css">
    <link rel="stylesheet" type="text/css" href="../css/inbox.css">
    <style>
        table {
  width: 100%;
}
/* table, th, td {
  border: 1px solid;
}
table {
  border-collapse: collapse;
} */
th, td {
  border-bottom: 1px solid #ddd;
}
th, td {
  padding: 5px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: #f2f2f2;}
        </style>
</head>
<body>
    <?php include("../header_community.php");?>
    <a style="float:right;" href="compose.php">New Message</a>
    <strong><h2>Inbox</h2></strong>
    <hr>
    <?php
                    $statement = $mysqli->prepare("SELECT * FROM inbox WHERE reciever = ? AND id = ? ORDER BY id DESC");
                $statement->bind_param("si", $_SESSION['profileuser3'], $_GET['id']);
                $statement->execute();
                $result = $statement->get_result();
                if($result->num_rows !== 0){
                    while($row = $result->fetch_assoc()) {
                        $stmt = $mysqli->prepare("UPDATE inbox SET is_read = '1' WHERE id = ?");
                        $stmt->bind_param("s", $_GET['id']);
                        $stmt->execute();
                        if ($row['sender'] == "system") {
                            $official = '<i title="This is an official message from the clipIt team." class="bi bi-patch-check-fill"></i>';
                        } else {
                            $official = "";
                        }
                        if ($_SESSION['profileuser3'] != $row['reciever'] OR $_SESSION['profileuser3'] != $row['sender']) {
                            echo '<script>window.location.href = "../index?err=Forbidden.";</script>';
                        }
                        echo '<h2>'.$row['subject'].'</h2>
<em>From: '.$row['sender'].' '.$official.'<br>
To: '.$row['reciever'].'<br>Sent: '.$row['date'].'<br></em><hr>
                           <p> '.$row['content'].'</p>
                        ';
                    }
                }
                else{
                    echo "<h2>Oops!</h2><hr>The message you are looking for does not exist.";
                }
                $statement->close();
            ?>
	<?php include("../footer.php") ?>
</body>
</html>