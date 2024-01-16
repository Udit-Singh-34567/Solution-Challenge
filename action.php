<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Save data to a text file
    $data = "Full Name: $fullName\nPhone Number: $phoneNumber\nEmail: $email\nMessage: $message\n\n";
    file_put_contents("contact_data.txt", $data, FILE_APPEND);

    // Redirect back to the form or any other page
    header("Location: index.html");
    exit();
}

?>
