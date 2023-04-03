<!DOCTYPE html>
<?php include 'global.php';?>
<html data-theme="light">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
</head>
<body>
	<?php
	include("header.php");
	?>
    <h2>Themes</h2>
    Welcome to the <strong>themes page!</strong> <br>
    Here, you can try themes (duh) <br> <h1></h1> <hr>
    <strong>Original Themes</strong> <br>
    Dark Theme (BETA) <button id="tdark" name="theme">Use</button> <br>
    Light Theme <button id="tlight" name="theme">Use</button> <br>
    YuoTueb Logo Theme <button id="tlogo" name="theme">Use</button> <br>
    Test Theme (NOT DONE) <button id="tolive" name="theme">Use</button> <hr>
    <strong>User-created themes</strong> <br>
    These themes were made by non-staff members. They may contain features (e.g. box-shadow) that are not added into the official theme picker. <br>
    <b>Frutiger</b> - <a href="https://raw.githubusercontent.com/ky-1/RTMods/main/frutiger.css">GET (Requires: Stylus)</a>
</body>
<script src="js/themes.js"></script>
</html>
<?php $mysqli->close();?>