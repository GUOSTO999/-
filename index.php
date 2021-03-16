<?php
session_start();
$token=md5(time());
$_SESSION["token"]=$token;
include("test.html");
?>
