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
.read {
    color: #606060;
}
.unread {
    background: #e0e0e0;
}
        </style>
</head>
<body>
    <?php include("../header_community.php");?>
    <a style="float:right;" href="compose.php">New Message</a>
    <strong><h2>Inbox</h2></strong>
    <hr>
    <table>
                        <thead>
                          <tr>
                            <th>From</th>
                            <th>Subject</th>
                            <th>Content</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
            <?php
                    $statement = $mysqli->prepare("SELECT * FROM inbox WHERE reciever = ? ORDER BY id DESC");
                $statement->bind_param("s", $_SESSION['profileuser3']);
                $statement->execute();
                $result = $statement->get_result();
                if($result->num_rows !== 0){
                    while($row = $result->fetch_assoc()) {
                        if($row['is_read'] == 1) {
                            $read = "read";
                        } else {
                            $read = "unread";
                        }
                        $date = date("F d, Y", strtotime($row["date"]));
                        $out = strlen($row['content']) > 25 ? mb_substr($row['content'],0,25)."..." : $row['content'];
                        echo '<tr class="message '.$read.'">
                            <td>'.$row['sender'].'</td>
                            <td><a href="view.php?id='.$row['id'].'">'.$row['subject'].'</a></td>
                            <td>'.$out.'</td>
                            <td>'.$date.'</td>
                          </tr>
                          <tr>
                        ';
                    }
                }
                else{
                    echo "You have no mail.";
                }
                $statement->close();
            ?>
            </tbody>
                      </table>
	<?php include("../footer.php") ?>
</body>
</html>