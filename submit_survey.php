<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$favorite_food = implode(", ", $_POST['favorite_food']);
$eat_out_rating = $_POST['eat_out_rating'];
$watch_movies_rating = $_POST['watch_movies_rating'];
$watch_tv_rating = $_POST['watch_tv_rating'];
$listen_radio_rating = $_POST['listen_radio_rating'];

$sql = "INSERT INTO surveys (name, age, email, contact, favorite_food, eat_out_rating, watch_movies_rating, watch_tv_rating, listen_radio_rating)
VALUES ('$name', $age, '$email', $contact, '$favorite_food', $eat_out_rating, $watch_movies_rating, $watch_tv_rating, $listen_radio_rating)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.html");
?>