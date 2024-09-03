<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit;
}

include('includes/db.php');

if (isset($_GET['id'])) {
    $stmt = $db->prepare('DELETE FROM bookings WHERE id = :id');
    $stmt->execute(['id' => $_GET['id']]);
    header('Location: admin_dashboard.php');
    exit;
}
?>
