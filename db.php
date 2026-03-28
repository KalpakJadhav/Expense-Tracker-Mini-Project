<?php
$conn = mysqli_connect("localhost", "root", "", "expense_tracker");
if(!$conn){
    die("Database connection failed");
}
session_start();
?>
