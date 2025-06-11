<?php
// Database connection
$servername = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$dbname = "practical9"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass = $_POST["pass"];

    // Insert data into database
    $sql = "INSERT INTO users (email, phone, pass) VALUES ('$email', '$phone', '$pass')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close connection
$conn->close();
?>
