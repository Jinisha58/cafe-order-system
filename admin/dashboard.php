<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Order System</title>
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Internal CSS for styling */
        .sidebar {
            background-color: #333;; /* Set your sidebar background color */
        }
        .dropdown-menu {
            background-color: #333;; /* Match this with your sidebar color */
            border: none; /* Remove border if you want a cleaner look */
        }
        .dropdown-item:hover {
            background-color: dark; /* Optional: Change hover color for better visibility */
        }
    </style>
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
        <!-- Content goes here -->
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
