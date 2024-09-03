<?php
$bus_id = $_POST['busId'];
$selected_seats = explode(',', $_POST['selectedSeats']);
$customer_name = $_POST['customerName'];
$customer_email = $_POST['customerEmail'];

$conn = new mysqli('localhost', 'username', 'password', 'database');

foreach ($selected_seats as $seat) {
    $query = $conn->prepare("INSERT INTO bookings (bus_id, seat_number, customer_name, customer_email, payment_status) VALUES (?, ?, ?, ?, 'pending')");
    $query->bind_param('iiss', $bus_id, $seat, $customer_name, $customer_email);
    $query->execute();
}

// Simulate generating an Mpesa payment URL
$mpesa_url = "https://mpesa.example.com/pay?amount=" . (count($selected_seats) * 10) . "&ref=" . uniqid();

echo json_encode(['success' => true, 'mpesa_url' => $mpesa_url]);
?>