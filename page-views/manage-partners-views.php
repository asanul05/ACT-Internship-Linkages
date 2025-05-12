<?php
$conn = new mysqli("localhost", "root", "", "linkages");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Add Partner
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_partner'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $location = $conn->real_escape_string($_POST['location']);
    $type = $conn->real_escape_string($_POST['type']);
    $region = $conn->real_escape_string($_POST['region']);
    $logo = $conn->real_escape_string($_POST['logo']);
    $description = $conn->real_escape_string($_POST['description']);
    $partnership_since = $conn->real_escape_string($_POST['partnership_since']);
    $programs = $conn->real_escape_string($_POST['programs']);

    $query = "INSERT INTO partners (name, location, type, region, logo, description, partnership_since, programs) 
              VALUES ('$name', '$location', '$type', '$region', '$logo', '$description', '$partnership_since', '$programs')";
    $conn->query($query);
}

// Handle Edit Partner
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_partner'])) {
    $id = (int)$_POST['id'];
    $name = $conn->real_escape_string($_POST['name']);
    $location = $conn->real_escape_string($_POST['location']);
    $type = $conn->real_escape_string($_POST['type']);
    $region = $conn->real_escape_string($_POST['region']);
    $logo = $conn->real_escape_string($_POST['logo']);
    $description = $conn->real_escape_string($_POST['description']);
    $partnership_since = $conn->real_escape_string($_POST['partnership_since']);
    $programs = $conn->real_escape_string($_POST['programs']);

    $query = "UPDATE partners SET 
              name = '$name', 
              location = '$location', 
              type = '$type', 
              region = '$region', 
              logo = '$logo', 
              description = '$description', 
              partnership_since = '$partnership_since', 
              programs = '$programs' 
              WHERE id = $id";
    $conn->query($query);
}

// Handle Delete Partner
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $query = "DELETE FROM partners WHERE id = $id";
    $conn->query($query);
}

// Fetch Partners
$query = "SELECT * FROM partners";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Partners</title>
    <link rel="stylesheet" href="../css/manage-partners.css">
</head>
<body class='manage-partners-body'>
    <h1>Manage Partners</h1>

    <!-- Add Partner Form -->
    <h2>Add New Partner</h2>
    <form method="POST" action="manage-partners.php">
        <input type="hidden" name="id" value="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br>

        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="national">National</option>
            <option value="international">International</option>
        </select><br>

        <label for="region">Region:</label>
        <select id="region" name="region" required>
            <option value="asia">Asia</option>
            <option value="europe">Europe</option>
            <option value="america">America</option>
            <option value="africa">Africa</option>
            <option value="australia">Australia</option>
            <option value="antartica">Antartica</option>
        </select><br>

        <label for="logo">Logo (File Path):</label>
        <input type="text" id="logo" name="logo" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br>

        <label for="partnership_since">Partnership Since:</label>
        <input type="number" id="partnership_since" name="partnership_since"><br>

        <label for="programs">Programs (Comma-Separated):</label>
        <input type="text" id="programs" name="programs"><br>

        <button type="submit" name="add_partner">Add Partner</button>
    </form>

    <!-- Partners List -->
    <h2>Existing Partners</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Type</th>
                <th>Region</th>
                <th>Logo</th>
                <th>Description</th>
                <th>Partnership Since</th>
                <th>Programs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['location']); ?></td>
                    <td><?php echo htmlspecialchars($row['type']); ?></td>
                    <td><?php echo htmlspecialchars($row['region']); ?></td>
                    <td><img src="../imgs/<?php echo htmlspecialchars($row['logo']); ?>" alt="Logo" width="50"></td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                    <td><?php echo htmlspecialchars($row['partnership_since']); ?></td>
                    <td><?php echo htmlspecialchars($row['programs']); ?></td>
                    <td>
                        <a href="manage-partners.php?edit=<?php echo $row['id']; ?>">Edit</a>
                        <a href="manage-partners.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this partner?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Edit Partner Form -->
    <?php if (isset($_GET['edit'])): 
        $id = (int)$_GET['edit'];
        $editQuery = "SELECT * FROM partners WHERE id = $id";
        $editResult = $conn->query($editQuery);
        $editRow = $editResult->fetch_assoc();
    ?>
    <h2>Edit Partner</h2>
    <form method="POST" action="manage-partners.php">
        <input type="hidden" name="id" value="<?php echo $editRow['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($editRow['name']); ?>" required><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($editRow['location']); ?>" required><br>

        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="national" <?php echo $editRow['type'] === 'national' ? 'selected' : ''; ?>>National</option>
            <option value="international" <?php echo $editRow['type'] === 'international' ? 'selected' : ''; ?>>International</option>
        </select><br>

        <label for="region">Region:</label>
        <select id="region" name="region" required>
            <option value="asia" <?php echo $editRow['region'] === 'asia' ? 'selected' : ''; ?>>Asia</option>
            <option value="europe" <?php echo $editRow['region'] === 'europe' ? 'selected' : ''; ?>>Europe</option>
            <option value="america" <?php echo $editRow['region'] === 'america' ? 'selected' : ''; ?>>America</option>
            <option value="africa" <?php echo $editRow['region'] === 'africa' ? 'selected' : ''; ?>>Africa</option>
            <option value="australia" <?php echo $editRow['region'] === 'australia' ? 'selected' : ''; ?>>Australia</option>
            <option value="antartica" <?php echo $editRow['region'] === 'antartica' ? 'selected' : ''; ?>>Antartica</option>
        </select><br>

        <label for="logo">Logo (File Path):</label>
        <input type="text" id="logo" name="logo" value="<?php echo htmlspecialchars($editRow['logo']); ?>" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo htmlspecialchars($editRow['description']); ?></textarea><br>

        <label for="partnership_since">Partnership Since:</label>
        <input type="number" id="partnership_since" name="partnership_since" value="<?php echo htmlspecialchars($editRow['partnership_since']); ?>"><br>

        <label for="programs">Programs (Comma-Separated):</label>
        <input type="text" id="programs" name="programs" value="<?php echo htmlspecialchars($editRow['programs']); ?>"><br>

        <button type="submit" name="edit_partner">Update Partner</button>
    </form>
    <?php endif; ?>
</body>
</html> 