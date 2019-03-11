<?php 

    $conn = mysqli_connect("localhost", "root", "", "loginadminuser");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>