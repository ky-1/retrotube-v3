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
            $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $statement->bind_param("s", $_SESSION['profileuser3']);
            $statement->execute();
            $result = $statement->get_result();
            while($row = $result->fetch_assoc()) {
                if ($row['banned'] == '1') {
                    $banreason = $row['banreason'];
              } else {
				header('Location: index.php');
			  }
            }
            ?>
			<div class="banned">
	<h2>Account Terminated</h2>
	<p>
	<b>Your account has been permanently terminated for violating our rules.</b><br><b>Ban reason:</b> <?php echo $banreason; ?><br><br>
	You may not make a new account at this time.<br>Want to appeal? Join our <a href="//discord.gg/yuotueb">Discord</a>.
</p>
		</div>
	<?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>