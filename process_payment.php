<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the payment information from the form
$amount = $_POST['amount'];
$payment_method = $_POST['payment_method'];

// Insert the payment information into the database
$sql = "INSERT INTO payments (user_id, amount, payment_method, payment_status) VALUES (1, '$amount', '$payment_method', 'pending')";
if (mysqli_query($conn, $sql)) {
    echo "Payment successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>