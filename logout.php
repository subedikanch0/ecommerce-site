<?php
session_start();
session_destroy();
header("refresh:0, url=al.php");
//echo 'You have been logged out. <a href="class.php">Go back</a>';
?>