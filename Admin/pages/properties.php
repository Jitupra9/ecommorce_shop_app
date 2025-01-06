<?php
include '../includes/auth.php';
include '../header.php';
?>
<h2>Manage Properties</h2>
<a href="add_property.php" class="btn">Add Property</a>
<table>
    <thead>
        <tr>
            <th>Property ID</th>
            <th>Title</th>
            <th>Location</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../includes/db.php';
        $stmt = $pdo->query('SELECT * FROM properties');
        while ($row = $stmt->fetch()) {
            echo "<tr>
                <td>{$row['property_id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['location']}</td>
                <td>{$row['price']}</td>
                <td><a href='edit.php?id={$row['property_id']}'>Edit</a> | <a href='delete.php?id={$row['property_id']}'>Delete</a></td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<?php include '../footer.php'; ?>
