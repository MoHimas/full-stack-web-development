<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : null;
    $location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : null;
    $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : null;
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : null;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    // Check if all fields are filled
    if ($name && $email && $phone && $location && $date && $service && $message) {
        $stmt = $conn->prepare("INSERT INTO enquiries (name, email, phone, location, date, service, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $email, $phone, $location, $date, $service, $message);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

$conn->close();
?>



