<!DOCTYPE html>
<?php include 'global.php';?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
</head>
<body>
	<?php
	include("header.php");
	?>
	<h2>FAQ</h2>
	<p>
	<h4>Q: What are my passwords hashed with?</h4>
	<p>A: All passwords are plaintext. (just kidding, its bcrypt lol)</p>
	<h4>Q: Help! I can't upload a video. When I try to upload it, it loads for a few seconds and then does nothing!</h4>
	<p>A: Try compressing the video. Server automatically does this, however that's after the file is uploaded, so you still need to do it manually.</p>
	<h4>Q: What features will you add soon?</h4>
	<p>
	A: I'll add some new stuff soon I guess.<br><br>
	Contact server: https://discord.gg/ku4nsBTnHt<br>
	</p>
	<hr>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>