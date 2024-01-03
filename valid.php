<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Basic validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
    } elseif ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Validation passed, do further processing (e.g., save to database)
        // Here, you can add code to insert the user into a database or perform other actions
        echo "Registration successful!";
    }
} else {
    // Redirect to the registration form if accessed directly without POST method
    header("Location: reg.html");
    exit();
}
?>
