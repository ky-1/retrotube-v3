<?php
function archiveAllUserInfo($username, $connection) {
    $stmt = $connection->prepare("UPDATE comments SET comment = '[deleted]' WHERE author = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();

    $stmt = $connection->prepare("UPDATE comments SET author = 'deleteduser' WHERE author = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();

    $stmt = $connection->prepare("UPDATE videos SET author = 'deleteduser' WHERE author = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();

    $stmt = $connection->prepare("UPDATE users SET deactivated = '1' WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();
    return true;
}
?>