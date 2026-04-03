<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect(
    "sql306.infinityfree.com",
    "if0_41566692",
    "Xg3MKTyYliPNUXb",
    "if0_41566692_contactdb"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>