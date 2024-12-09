<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit();
}

// Fetch tutorial data from the database
$query = "SELECT * FROM tutorials";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    echo '<div class="tutorial">';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['description'] . '</p>';
    echo '<a href="watch.php?id=' . $row['id'] . '">Watch</a>';
    echo '</div>';
}
?>