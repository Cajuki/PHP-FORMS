<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

$servername = "localhost";
$username = "FIDEL CHIMWANI";
$password = "your_password";
$dbname = "campaign_feedback";

$conn = new mysqli("localhost", "root", "", "campaign_feedback");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
$sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";

if ($conn->query($sql) === TRUE) {
    
    echo "Thank you for submitting your feedback! We appreciate your input.";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>