<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is empty
$dbname = "hotel";  // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$ic_number = $_POST['ic_number'];
$arrival_date = $_POST['arrival_date'];
$departure_date = $_POST['departure_date'];
$guests = $_POST['guests'];
$card_number = $_POST['card_number'];
$exp_date = $_POST['exp_date'];
$security_code = $_POST['security_code'];
$total_amount = $_POST['total_amount'];

// Insert into DB
$sql = "INSERT INTO bookings (full_name, phone_number, ic_number, arrival_date, departure_date, guests, card_number, exp_date, security_code, total_amount) 
        VALUES ('$full_name', '$phone_number', '$ic_number', '$arrival_date', '$departure_date', '$guests', '$card_number', '$exp_date', '$security_code', '$total_amount')";

if ($conn->query($sql) === TRUE) {
    header("Location: payment_success.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
