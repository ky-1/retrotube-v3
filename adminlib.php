<?php
/* admin functions for tictac and oldwire */
function banUser($username, $reason, $mysqli) {
    // $stmt = $mysqli->prepare("UPDATE videos SET privacy = 'private' WHERE author = ?");
    // $stmt->bind_param("s", $username);
    // $stmt->execute();
    // $stmt->close();
    
    $stmt = $mysqli->prepare("UPDATE users SET banned = '1' WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();

    $stmt = $mysqli->prepare("UPDATE users SET banreason = ? WHERE username = ?");
    $stmt->bind_param("ss", $reason, $username);
    $stmt->execute();
    $stmt->close();
}
function unbanUser($username, $mysqli) {
    $stmt = $mysqli->prepare("UPDATE users SET banned = '0' WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();
}
?>