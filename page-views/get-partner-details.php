<?php
$conn = new mysqli("localhost", "root", "", "linkages");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = "SELECT * FROM partners WHERE id = $id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="partner-popup-header">';
        echo '<img src="../imgs/' . $row['logo'] . '" alt="' . htmlspecialchars($row['name']) . '">';
        echo '<div class="partner-popup-card-content">';
            echo '<h1>' . htmlspecialchars($row['name']) . '</h1>';
            echo '<p>' . htmlspecialchars($row['location']) . '</p>';
        echo '</div>';
    echo '</div>';
    echo '<div class="partner-popup-body">';
        echo '<p class="partner-popup-bodyp1">' . htmlspecialchars($row['description']) . '</p>';
        echo '<p><strong>Partnership Since:</strong> ' . htmlspecialchars($row['partnership_since']) . '</p>';
        echo '<p id="partner-popup-bodyp3"><strong>Collaborative Programs:</strong></p>';
        echo '<ul>';
        foreach (explode(',', $row['programs']) as $program) {
            echo '<li>' . htmlspecialchars($program) . '</li>';
        }
        echo '</ul>';
        echo '<p><strong>Partnership Type:</strong> ' . htmlspecialchars($row['type']) . '</p>';
    echo '</div>';
    echo '<a href="https://www.seameo-innotech.org/about-innotech-2/"><button class="visit-website-button">Visit Partner        </button></a>';
    
} else {
    echo '<p>Partner details not found.</p>';
}


$conn->close();
?>    