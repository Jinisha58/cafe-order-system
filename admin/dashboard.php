<?php
session_start(); // Start the session

// Check if there is a success message to display
if (isset($_SESSION['success_message'])) {
    echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
    unset($_SESSION['success_message']); // Clear the message after displaying it
}
?>


<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Order System - Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <span>Welcome, <strong>Admin</strong></span>
        <a href="../process/logout.php">
            <button class="logout-btn">Logout</button>
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4><a href="#">Admin Dashboard</a></h4>
        <a href="#tables" onclick="toggleSection('tables')">Tables</a>
        <a href="#menu" onclick="toggleSection('menu')">Menu</a>
        <a href="#customers" onclick="toggleSection('customers')">Customers</a>
        <a href="#cashiers" onclick="toggleSection('cashiers')">Cashiers</a>
        
        <!-- Dropdown for Add Menu Item -->
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="addItemsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Add Menu Item
            </a>
            <ul class="dropdown-menu" aria-labelledby="addItemsDropdown">
                <li><a class="dropdown-item" href="add_subcategory.php">Add SubCategory</a></li>
                <li><a class="dropdown-item" href="add_menu.php">Add Menu</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Load content from index.php -->
        <?php include('index.php'); ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        // JavaScript function to toggle sections
        function toggleSection(section) {
            const sections = ['tables', 'menu', 'customers', 'cashiers'];
            sections.forEach(sec => {
                const element = document.getElementById(sec);
                if (sec === section) {
                    element.style.display = element.style.display === 'none' ? 'block' : 'none';
                } else {
                    element.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
