<?php
include('db_connection.php');

unset($_SESSION['Auth']);
header("Location: login.php");
exit;

?>