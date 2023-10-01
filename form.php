<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'portfolio';

$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}
else{
    echo "Connected to database";
}

// Check if the form is submitted
if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    // Validate form data
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If there are validation errors, redirect back with error messages
    if (!empty($errors)) {
        $_SESSION["error_message"] = implode("<br>", $errors);
        header("location: index.php");
        exit();
    }

    $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the SQL statement
    if (mysqli_query($connection, $sql)) {
        // Set success message in session
        $_SESSION["success_message"] = "Contact successfully!";
        header("location: index.php");
        exit();
    } else {
        // Set error message in session
        $_SESSION["error_message"] = "Error saving contact.";
        header("location: index.php");
        exit();
    }
}

mysqli_close($connection);


?>


