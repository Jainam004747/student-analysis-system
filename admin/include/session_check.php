<?php
session_start();
if(!isset($_SESSION['user_login']))
{
    header("location: index.php");
}
?>