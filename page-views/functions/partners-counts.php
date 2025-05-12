<?php
$conn = new mysqli("localhost", "root", "", "linkages");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch counts for each category
$overallQuery = "SELECT COUNT(*) AS total FROM partners";
$overallResult = $conn->query($overallQuery);
$overallCount = $overallResult->fetch_assoc()['total'];

$internationalQuery = "SELECT COUNT(*) AS total FROM partners WHERE type = 'international'";
$internationalResult = $conn->query($internationalQuery);
$internationalCount = $internationalResult->fetch_assoc()['total'];

$nationalQuery = "SELECT COUNT(*) AS total FROM partners WHERE type = 'national'";
$nationalResult = $conn->query($nationalQuery);
$nationalCount = $nationalResult->fetch_assoc()['total'];

$conn->close();
?>