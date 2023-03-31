<?php
    // connects to your database
    $mysqli = new mysqli("127.0.0.1", "root", "", "retrotube");
    // starts session
	session_start();

	// gets uid from username
    function idFromUser($nameuser){
    	global $mysqli;
    	$uid = 0;
    	$username = $mysqli->escape_string($nameuser);
		$statement = $mysqli->prepare("SELECT `id` FROM `users` WHERE `username` = ?");
		$statement->bind_param("s", $username);
		$statement->execute();
		$result = $statement->get_result();
		while($row = $result->fetch_assoc()){
			$uid = (int)$row["id"];
		}
		$statement->close();
		return $uid;
    }

	// gets profile picture
    function getUserPic($uid){
    	$userpic = (string)$uid;
		if(file_exists("./pfp/".$userpic) !== TRUE){
			$userpic = "default";
		}
		return $userpic;
    }
    // sets logged in variable
    $loggedIn = isset($_SESSION['profileuser3']);

	// sets discord webhook
	$webhook = "https://discord.com/api/webhooks/1091202278825918474/4X1obWT3dt34bR6oIh83j7UzmoORNytQU-ffCK8ZZJYAnk3EuEUbcvvSqOMEjTRhjBaz";
?>