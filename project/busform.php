<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>bookings</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        /* Styling for the header */
        h2 {
            color: #4CAF50;
            
        }

        /* Styling for the table */
        table {
            background-color: #ffffff;
            border-collapse: collapse;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        /* Styling for table rows */
        table tr {
            border-bottom: 1px solid #dddddd;
        }

        /* Styling for table cells */
        table td {
            padding: 10px;
            text-align: left;
        }

        /* Styling for input fields */
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        /* Styling for the submit button */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Center-align the container */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

    </style>
</head>
<center>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <form method="POST" action="buses.php">
        <table>
         <tr>
            <td>Bus:</td>
            <td><input type="text" name="Bus" required></td>
         </tr>
         <tr>
            <td>ROUTE: </td>
            <td><input type="route" name="route" required></td>
         </tr>
         <tr>
            <td>number_of_seats:</td>
            <td><input type="number_of_seats" name="number_of_seats"></td>
         </tr>
         
         <td>
            <input type="submit" name="submit" value="Submit"> 
         </td>
      </table>
   </form>
   </center>
   <?php
      $Bus = $route = $number_of_seats =  "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $Bus = $_POST["Bus"];
         $route = $_POST["route"];
         $number_of_seats = $_POST["number_of_seats"];

         // Database connection
         $servername = "localhost";
         $username = "root";
         $password = "vinnie@universal254";
         $dbname = "busbooking";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);

         // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
         }

         $sql = "INSERT INTO bus (number_plate, route, number_of_seats,) VALUES ('$number_plate', '$route', '$number_of_seats')";

         if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }

         $conn->close();
      }
   ?>
</body>
</html>