<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "vinnie44040";
$dbname = "busbookingdb";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $from = htmlspecialchars($_POST['from']);
    $to = htmlspecialchars($_POST['to']);
    $date = htmlspecialchars($_POST['date']);

    // Validate form data
    if (empty($from) || empty($to) || empty($date)) {
        echo "All fields are required.";
        exit();
    }

    // Display the submitted information
    echo "<h2>Bus Reservation</h2>";
    echo "<p>Departure Location: " . $from . "</p>";
    echo "<p>Destination: " . $to . "</p>";
    echo "<p>Date: " . $date . "</p>";

     
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO reservations (departure, destination, date) VALUES ('$from', '$to', '$date')";
     if ($conn->query($sql) === TRUE) {
         echo "booking successful";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();
} else {
    echo "Invalid request method.";
}
?>

