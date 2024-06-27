<?php
include 'config.php';

// Query untuk mengambil semua data pengguna
$sql = "SELECT user_id, username, email FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data pengguna
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["user_id"]. " - Name: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
