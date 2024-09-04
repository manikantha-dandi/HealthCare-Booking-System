<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Establish a database connection
$conn = mysqli_connect('localhost', 'root', 'root', 'appointment');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['signup'])) {
    // Get form data
    $name = $_POST['fname'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordr = $_POST['pwdr'];

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO patient (name, gender, dob, phone, username, password, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssssss", $name, $gender, $dob, $contact, $username, $password, $email);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Sign Up completed!!</h2>";
        header("Refresh:3;url=Home.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>
