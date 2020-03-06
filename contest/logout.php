<?php
@session_start();
session_destroy();
header("Location: 002.php");
?>