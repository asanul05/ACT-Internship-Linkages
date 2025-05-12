<?php
// session_start();

// // Check if the user is logged in and is an admin
// if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
//     header("Location: login.php");
//     exit;
// }

$conn = new mysqli("localhost", "root", "", "linkages");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch statistics
$totalPartnersQuery = "SELECT COUNT(*) AS total FROM partners";
$totalPartnersResult = $conn->query($totalPartnersQuery);
$totalPartners = $totalPartnersResult->fetch_assoc()['total'];

$nationalPartnersQuery = "SELECT COUNT(*) AS total FROM partners WHERE type = 'National'";
$nationalPartnersResult = $conn->query($nationalPartnersQuery);
$nationalPartners = $nationalPartnersResult->fetch_assoc()['total'];

$internationalPartnersQuery = "SELECT COUNT(*) AS total FROM partners WHERE type = 'International'";
$internationalPartnersResult = $conn->query($internationalPartnersQuery);
$internationalPartners = $internationalPartnersResult->fetch_assoc()['total'];

$partnersByRegionQuery = "SELECT region, COUNT(*) AS total FROM partners GROUP BY region";
$partnersByRegionResult = $conn->query($partnersByRegionQuery);
$partnersByRegion = [];
while ($row = $partnersByRegionResult->fetch_assoc()) {
    $partnersByRegion[$row['region']] = $row['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1>Admin Dashboard</h1>
            <a href="logout.php" class="logout-button">Logout</a>
        </header>

        <!-- Statistics Section -->
        <div class="dashboard-stats">
            <div class="stat-box">
                <h2><?php echo $totalPartners; ?></h2>
                <p>Total Partners</p>
            </div>
            <div class="stat-box">
                <h2><?php echo $nationalPartners; ?></h2>
                <p>National Partners</p>
            </div>
            <div class="stat-box">
                <h2><?php echo $internationalPartners; ?></h2>
                <p>International Partners</p>
            </div>
        </div>

        <!-- Partners by Region -->
        <div class="dashboard-regions">
            <h2>Partners by Region</h2>
            <div class="region-stats">
                <?php foreach ($partnersByRegion as $region => $count): ?>
                    <div class="region-box">
                        <h3><?php echo $region; ?></h3>
                        <p><?php echo $count; ?> Partners</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Partners Management -->
        <div class="dashboard-actions">
            <h2>Manage Partners</h2>
            <a href="manage-partners.php" class="action-button">Add New Partner</a>
            <a href="manage-partners.php" class="action-button">View All Partners</a>
        </div>

        <!-- Search and Filter -->
        <div class="dashboard-search">
            <h2>Search Partners</h2>
            <form method="GET" action="manage-partners.php">
                <input type="text" name="search" placeholder="Search by name or location">
                <select name="type">
                    <option value="">All Types</option>
                    <option value="National">National</option>
                    <option value="International">International</option>
                </select>
                <select name="region">
                    <option value="">All Regions</option>
                    <option value="Asia">Asia</option>
                    <option value="Europe">Europe</option>
                    <option value="America">America</option>
                    <option value="Africa">Africa</option>
                    <option value="Australia">Australia</option>
                    <option value="Antarctica">Antarctica</option>
                </select>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</body>
</html>