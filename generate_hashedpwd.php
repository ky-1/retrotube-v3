<?php
$pwdtohash = "hacker";
$hashedpwd = password_hash($pwdtohash, PASSWORD_DEFAULT);
echo $hashedpwd;
?>