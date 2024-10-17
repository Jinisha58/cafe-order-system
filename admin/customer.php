<!-- admin_customers.php -->
<?php
include '../conn/connection.php'; // Include your database connection file

// Query to fetch all customers
$sql = "SELECT customer_id, customer_name, customer_contact FROM customers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
</head>
<body>

<h2>Customer Details</h2>

<?php
if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table border='1'>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["customer_id"] . "</td>
                <td>" . $row["customer_name"] . "</td>
                <td>" . $row["customer_contact"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No customers found.";
}

$conn->close();
?>

</body>
</html>
