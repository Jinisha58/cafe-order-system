<?php
// register_cashier.php
session_start(); // Start the session
include '../conn/connection.php'; // Include your database connection file

// Processing the registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cashier_name = $_POST['cashier_name'];
    $shift = $_POST['shift'];

    // Prepare and execute the insert query
    $query = "INSERT INTO cashiers (cashier_name, shift) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $cashier_name, $shift);

    if ($stmt->execute()) {
        // Set a session variable for success message
        $_SESSION['success_message'] = "Cashier registered successfully! Cashier ID: " . $stmt->insert_id;
        $stmt->close();
        $conn->close();

        // Redirect to the dashboard page
        header("Location: dashboard.php"); // Change to your actual dashboard page
        exit();
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Cashier</title>
</head>
<body>

<h2>Register Cashier</h2>

<form method="POST" action="register_cashier.php">
    <label for="cashier_name">Cashier Name:</label>
    <input type="text" id="cashier_name" name="cashier_name" required>

    <label for="shift">Shift:</label>
    <select id="shift" name="shift" required>
        <option value="Morning">Morning</option>
        <option value="Evening">Evening</option>
        <option value="Night">Night</option>
    </select>

    <input type="submit" value="Register Cashier">
</form>

<p><a href="display_cashier.php">View List of Cashiers</a></p>

</body>
</html>
