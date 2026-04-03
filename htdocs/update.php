<?php
include 'config.php';

/* Check if form was submitted */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data safely
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Update query
    $sql = "UPDATE contacts SET
                name='$name',
                email='$email',
                phone='$phone',
                address='$address'
            WHERE id='$id'";

    // Execute query
    if (mysqli_query($conn, $sql)) {

        // Redirect after success
        header("Location: index.php?updated=1");
        exit();

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>