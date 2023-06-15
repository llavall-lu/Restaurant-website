<?php
echo"Running";
// Database configuration
$hostname = "localhost";  
$username = "root";       
$password = "";           
$dbname = "reservationdb";  

// Create a new MySQLi instance
$connection = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Connected successfully
echo "Connected to the database successfully.";

// Handle form 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Perform validation 
    if (empty($name) || empty($email) || empty($date) || empty($time) || empty($message)) {
        die('Please fill in all fields.');
    }

    // SQL query to insert the data into the database
    $query = "INSERT INTO reservations (name, email, date, time, message) VALUES ('$name', '$email', '$date', '$time', '$message')";

    // Execute the query
    if (mysqli_query($connection, $query)) {
        // Display success message
        echo 'Booking successful!';
    } else {
        // Display error message
        echo 'Error: ' . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
