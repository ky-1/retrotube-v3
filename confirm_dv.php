<!DOCTYPE html>
<?php include 'global.php';?>
<?php include 'bancheck.php';?>
<head>
    <link rel="shortcut icon" href="./favicon.ico">
	<link rel="stylesheet" type="text/css" href="./css/global.css">
	<link rel="stylesheet" type="text/css" href="./css/account.css">
</head>
<body>
	<?php include("header.php");?>
	<div class="container-flex">
		<div class="col-1-2">
		    <h3>Confirm Deactivation</h3>
<p>This action is <b style="color:red;"><em>irreversible</em></b>. All videos will be dissociated from your username, all comments will be deleted, and logins will be permanently disabled. Are you sure you want to continue?<br><br><a href="deactivate.php?confirm=1">I'm sure, continue</a><br><a href=".">No, quit the deactivation process</a>
		</div>
		<hr>
		<div class="col-1-2">
			<h3>Your Account Details</h3>
			<?php
			if(isset($_SESSION['profileuser3'])){
				$rows = getSubscribers($_SESSION['profileuser3'], $mysqli);
			    $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
			    $statement->bind_param("s", $_SESSION['profileuser3']);
			    $statement->execute();
			    $result = $statement->get_result();
			    if($result->num_rows === 0) exit('No rows');
			    while($row = $result->fetch_assoc()) {
					$join = date("F d, Y", strtotime($row["date"]));
			        echo "
			        <div class=\"user-info\">
				        <a href=\"./profile.php?user=".$row["username"]."\"><img class=\"user-pic\" src=\"pfp/".getUserPic($row["id"])."\"></a>
				        <div class=\"user-stats\">
					        <div class=\"username\"><a href=\"./profile.php?user=".$row["username"]."\">".$row["username"]."</a></div>
					        <div><span class=\"subscribers black\">".$rows."</span> subscribers</div>
					        <div>Your E-mail: <span class=\"black\">".$row["email"]."</span></div>
					        <div>Joined: <span class=\"black\">".$join."</span></div>
				        </div>
			        </div>
			        <hr>
			        <h3>Your Current Description</h3>
			        <textarea class=\"current-description\" readonly>".$row["description"]."</textarea>";
			    }
			    $statement->close();
			}
			if(!isset($_SESSION['profileuser3'])) {
				echo('<script>
				window.location.href = "index.php";
				</script>');	
			}
			?>
		</div>
	</div>
	<?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>