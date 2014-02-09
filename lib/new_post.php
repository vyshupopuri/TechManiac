<?php
session_start();
if(!$_SESSION['userid']) header("location: index.php");
include_once('./dbconnect.php');