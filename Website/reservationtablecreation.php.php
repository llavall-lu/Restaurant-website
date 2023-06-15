<?php
$host = 'localhost'; 
$username = 'root'; 
$password = '';
$database = 'reservationdb';

// Establish a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// SQL query to create the reservation table
$query = "CREATE TABLE IF NOT EXISTS reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    message TEXT
)";

// Execute the query
if (mysqli_query($connection, $query)) {
    echo 'Reservation table created successfully.';
} else {
    echo 'Error creating table: ' . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
