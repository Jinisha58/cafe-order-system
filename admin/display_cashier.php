<?php
// list_cashiers.php
include '../conn/connection.php'; // Include your database connection file

// Query to fetch all cashiers
$sql = "SELECT cashier_id, cashier_name, shift FROM cashiers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Cashiers</title>
</head>
<body>

<h2>List of Cashiers</h2>

<?php
// Check if there are results
if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table border='1'>
            <tr>
                <th>Cashier ID</th>
                <th>Cashier Name</th>
                <th>Shift</th>
                <th>Action</th> <!-- Added Action column -->
            </tr>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["cashier_id"] . "</td>
                <td>" . $row["cashier_name"] . "</td>
                <td>" . $row["shift"] . "</td>
                <td>
                    <form method='POST' action='delete_cashier.php'> <!-- Form for delete action -->
                        <input type='hidden' name='cashier_id' value='" . $row["cashier_id"] . "'>
                        <input type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete this cashier?\");'>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No cashiers found.";
}

$conn->close();
?>

</body>
</html>
