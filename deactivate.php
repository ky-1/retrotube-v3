<?php
    include("global.php");
if($_GET['confirm'] == 1) {
    include("deactivatelib.php");
    archiveAllUserInfo($_SESSION['profileuser3'], $mysqli);
 session_start();
 unset($_SESSION['']);

 if(session_destroy())
 {
  header("Location: /index.php?err=Account deactivated successfully.");
 }
}