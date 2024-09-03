<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit;
}

include('includes/db.php');

// Fetch data from the database to display in the dashboard
$bookings = $db->query('SELECT * FROM bookings')->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .dashboard h1 {
            margin-top: 20px;
        }
        .bookings {
            width: 80%;
            margin-top: 20px;
        }
        .bookings table {
            width: 100%;
            border-collapse: collapse;
        }
        .bookings th, .bookings td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        .bookings th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        <div class="bookings">
            <h2>Bookings</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $booking): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($booking['id']); ?></td>
                        <td><?php echo htmlspecialchars($booking['from']); ?></td>
                        <td><?php echo htmlspecialchars($booking['to']); ?></td>
                        <td><?php echo htmlspecialchars($booking['date']); ?></td>
                        <td>
                            <a href="edit_booking.php?id=<?php echo $booking['id']; ?>">Edit</a> |
                            <a href="delete_booking.php?id=<?php echo $booking['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
