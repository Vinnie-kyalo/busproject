<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "vinnie@universal254";
$dbname = "busbooking";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define variables and set to empty values
$number_plate = $route = $number_of_seats = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Bus = $_POST["Bus"];
    $route = $_POST["route"];
    $number_of_seats = $_POST["number_of_seats"];

    // Insert new record
    $sql = "INSERT INTO bus (number_plate, route, number_of_seats) VALUES ('$number_plate', '$route', '$number_of_seats')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all records
$sql = "SELECT number_plate, route, number_of_seats FROM bus";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bus Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
        }
        h2, h3 {
            margin-top: 20px;
            color: #007BFF;
        }
        .records {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            margin-top: 20px;
        }
        .records table {
            width: 100%;
            border-collapse: collapse;
        }
        .records th, .records td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .records th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <div class="records">
        <h3>BUS BOOKING RECORDS</h3>
        <table>
            <tr>
                <th>number_plate</th>
                <th>ROUTE</th>
                <th>No of seats</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "</td><td>" . $row["number_plate"]. "</td><td>" . $row["route"]. "</td><td>" . $row["number_of_seats"]. "</td><td>" ;
                }
            } else {
                echo "<tr><td colspan='6'>0 results</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>