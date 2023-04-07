<!DOCTYPE html>
<?php include 'global.php';?>
<?php include 'bancheck.php';?>
<head data-theme="light">
	<link rel="stylesheet" type="text/css" href="./css/global.css">
	<link rel="stylesheet" type="text/css" href="./css/channels.css">
</head>
<body>
	<?php include "header.php"; ?>
		<div class="container-flex">
	    <div class="col-2-3">
			<?php
			$statement = $mysqli->prepare("SELECT * FROM users ORDER BY username DESC");
			$statement->execute();
			$result = $statement->get_result();
			if($result->num_rows !== 0){
				while($row = $result->fetch_assoc()) {
					$rows = getSubscribers($row['username'], $mysqli);
				    echo "
				    <div class='user'>
				    	<div class='user-info'>
						    <div><a href='./profile.php?user=".$row['username']."'>".$row['username']."</a></div>
						    <div><span class='black'>".$rows."</span> subscribers</div>
					    </div>
					    <div><a href='./profile.php?user=".$row["username"]."'><img class='user-picture' src='./pfp/".getUserPic($row["id"])."'></a></div>
				    </div>
				    <hr>";
				}
			}
			else{
				echo "There are no channels here. Why don't you make one?";
			}
			$statement->close();
			?>
	    </div>


	<div class="col-1-3">
	    <div class="card message">
	    Viewing channels may still be buggy. Report any bugs to the owner.
		<hr>
		<a href="subscription_center.php">View your subscriptions here</a>.
	    </div>
	</div>
	</div>
	<hr>
	<?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>