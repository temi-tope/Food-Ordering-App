<?php
session_start();

$servername = "localhost";
$server_user = "phpmyadmin";
$server_pass = "root";
$dbname = "food";


if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}

if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
}

$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>