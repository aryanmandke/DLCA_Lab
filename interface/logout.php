<?php 
include('../databaseinfo/database.php');

session_destroy();

header("Location: ../login/login_page.php");
?>