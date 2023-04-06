<!DOCTYPE html>
<?php include 'global.php';?>
<head>
    <title>Your Subscriptions - YuoTueb</title>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/channels.css">
</head>
<body>
	<?php
	include("header.php");
    if(!isset($_SESSION['profileuser3'])) {
        echo('<script>
        window.location.href = "index.php";
        </script>');	
    }
	?>
	<h2>Your Subscriptions</h2>
    <div class="container-flex">
    <div class="col-2-3">
	<?php
	include("getsubs.php");
	?>
    </div>
    <div class="col-1-3">
    <div class="card message">
This is a new page to view all the channels you're subscribed to.
</div>
</div></div>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>