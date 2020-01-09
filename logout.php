<?php session_start();
/* FILE DESTROYS THE SESSION AND NAVIGATES BACK TO HOME (INDEX.PHP) */

session_destroy(); /* Destroy started session */
header("location:index.php");
exit;
?>