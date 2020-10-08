<?php
include 'config.php';
include 'head.html' ;

session_start();
session_destroy();
unset($_SESSION['name']);
header("location: adminlogin.php");