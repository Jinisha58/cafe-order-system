<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cashier Dashboard</title>
        <link rel="stylesheet" href="../css/cashier.css">
        <script src="../js/script2.js"> </script>
    </head>
<body>

<div class="header">
    <span>Welcome, <strong>Cashier</strong></span>
    <!-- Logout Button -->
    <a href="../process/logout.php">
      <button class='logout-btn'>Logout</button>
    </a>
</div>
<!-- Sidebar -->
<div class="sidebar">
    <h4><a href="#">Cashier Dashboard</a></h4>
  <a href="#" onclick="showSection('orderSection')">Order</a>  
  <a href="#" onclick="showSection('tableSection')">Table Management</a>
  <a href="#" onclick="showSection('takeOrderSection')">Take Order</a>
 <!-- <a href="#" onclick="showSection('customerSection')">Customers</a>-->
</div>