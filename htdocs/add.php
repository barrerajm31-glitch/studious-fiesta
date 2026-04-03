<?php
include 'config.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$address = trim($_POST['address']);

if(empty($name) || empty($email) || empty($phone) || empty($address)){
    die("All fields are required.");
}

mysqli_query($conn, "INSERT INTO contacts(name,email,phone,address) VALUES('$name','$email','$phone','$address')");

header("Location: index.php");
exit();
?>