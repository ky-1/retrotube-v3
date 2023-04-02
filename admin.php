<!DOCTYPE html>
<?php include 'global.php';?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
</head>
<body>
	<?php
	include("header.php");
	?>
    <?php
                    $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? ");
                    $statement->bind_param("s", $_SESSION['profileuser3']);
                    $statement->execute();
                    $result = $statement->get_result();
                    if($result->num_rows !== 0){
                        while($row = $result->fetch_assoc()) {
                        if ($row["is_admin"] !== 1) {
                          echo('<script>
      window.location.href = "index.php?msg=You are not allowed to view that page.";
      </script>');
                        }  
                        }
                    }
                    else{
                        echo "";
                    }
                ?>
	<h2>Admin</h2>
	<hr>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>