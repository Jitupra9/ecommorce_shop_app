<?php
include '../includes/auth.php';
include '../includes/db.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $db->escape_string($_POST['title']);
    $location = $db->escape_string($_POST['location']);
    $price = $db->escape_string($_POST['price']);

    $query = "INSERT INTO properties (title, location, price) VALUES ('$title', '$location', '$price')";
    if ($db->query($query)) {
        echo "<p>Property added successfully!</p>";
    } else {
        echo "<p>Error: " . $db->conn->error . "</p>";
    }
}
?>

<?php include '../header.php'; ?>
<h2>Add Property</h2>
<form method="POST">
    <label>Title:</label>
    <input type="text" name="title" required>
    <label>Location:</label>
    <input type="text" name="location" required>
    <label>Price:</label>
    <input type="number" name="price" required>
    <button type="submit">Add Property</button>
</form>
<?php include '../footer.php'; ?>
