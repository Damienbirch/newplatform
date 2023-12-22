<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST["Fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $coupon = $_POST["coupon"];
    $userPackage = $_POST["user_package"];

    // Validate and sanitize the data (you can add more validation as needed)

    // For example, let's check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address");
    }

    // Process the data (you can replace this with your actual registration logic)
    // For now, we'll just print the collected data
    echo "Full Name: $fullname<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
    echo "Phone Number: $number<br>";
    echo "Coupon Code: $coupon<br>";
    echo "Chosen Plan: $userPackage<br>";

    // You can insert the data into a database or perform any other necessary actions here

    // Redirect to a success page
    header("Location: signin.html");
    exit();
} else {
    // If the form is not submitted through POST, redirect to the registration page
    header("Location: reg.html");
    exit();
}
?>
