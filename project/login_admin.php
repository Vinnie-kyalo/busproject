<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="login_admin.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <br>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare('SELECT * FROM admin WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        echo "Login successful!";
        // Redirect to admin dashboard or other page
        header('Location: admin_dashboard.php');
        exit();
    } else {
        echo "Invalid credentials";
    }
}
?>
