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

$sql = "SELECT image_path FROM gallery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="gallery-item">';
        echo '<img src="' . $row["image_path"] . '" alt="Gallery Image">';
        echo '</div>';
    }
} else {
    echo "No images found.";
}

$conn->close();
?>
