<?php
$host="localhost";
$user="root";
$password="";
$database="admin";
$db = "admin";
$koneksi=mysqli_connect($host,$user,$password,$db);
$conn = new MySQLi($host, $user, $password, $db);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}