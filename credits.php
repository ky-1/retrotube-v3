<!DOCTYPE html>
<?php include 'global.php';?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
</head>
<body>
	<?php
	include("header.php");
	?>
	<h2>Credits</h2>
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
	<h2>Credits</h2>
	<h4>Original site - <em>tyre</em></h4>
	<h4>Current site - <em>kylarz</em></h4>
	<h4>Q: What did you do to the site?</h4>
	<p>A: I added ffmpeg to patched the uploader, added search, added randomized video strings, and patched some other vulnerabilities.
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>