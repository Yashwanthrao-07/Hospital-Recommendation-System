<?php
// Database connection settings
$host = "localhost"; // Replace with your host name
$database = "hospital_reccomendation"; // Replace with your database name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password

// Create a connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to insert form data into a table
$sql = "INSERT INTO your_table_name (username, password) VALUES ('$username', '$password')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
