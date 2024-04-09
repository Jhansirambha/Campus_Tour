<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "j05@7";
$dbname = "user_info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$firstname = $_POST['f_name'];
$lastname = $_POST['l_name'];
$email = $_POST['e_mail'];
$password = $_POST['pass_word'];


// SQL to insert comment into database
$sql = "INSERT INTO userdata (First_Name,Last_Name,EMAIL,PASSWORD) VALUES ('$firstname', '$lastname', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "data added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>