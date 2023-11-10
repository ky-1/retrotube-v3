<?php
$pwdtohash = "revid";
$hashedpwd = password_hash($pwdtohash, PASSWORD_DEFAULT);
echo $hashedpwd;
?>