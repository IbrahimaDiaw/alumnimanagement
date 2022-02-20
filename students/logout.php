<?php
session_start();
unset($_SESSION['alumni']);
session_destroy();
header('Location:../index.php');
?>