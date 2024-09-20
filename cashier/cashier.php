<!DOCTYPE html>
<html>
<head>
<title>Cashier Dashboard</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  width: 100%;
  display: flex;
  margin-top: 20px;
}

.header {
            background-color: #333;
            color: white;
            padding: 25px 20px;
            text-align: center;
}
/* Sidebar */
.sidebar {
  width: 200px;
  background-color: #333;
  color: white;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  padding-top: 20px;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
  text-align: left;
}

.sidebar a:hover {
  background-color: #ddd;
}

/* Content Area */
.content {
  margin-left: 220px; /* Space for the sidebar */
  padding: 20px;
  width: calc(100% - 220px);
}

/* Table styling */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

.button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

/* for quantity panel */
.quantity-panel {
            display: flex;
            align-items: center;
        }
        .quantity-panel button {
            width: 30px;
            height: 30px;
        }
        .quantity-panel input {
            width: 50px;
            text-align: center;
        }


/* Logout button style */
.logout-btn {
  position: absolute;
  top: 20px;
  right: 20px;
  background-color: #f44336; /* Red background for logout */
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.logout-btn:hover{
  background-color: #b42121; 
}

/* Hide sections initially */
#orderSection, #tableSection, #takeOrderSection {
  display: none;
}

form {
  margin-top: 20px;
}

form input, form select, form button {
  margin: 5px 0;
  padding: 10px;
  display: block;
  width: 100%;
  max-width: 400px;
}
</style>
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
</div>

<!-- Content -->
<div class="content">

  <!-- Order Section -->
  <div id="orderSection">
    <h2>Order</h2>
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Table Number</th>
          <th>Order Items</th>
          <th>Total Price</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Simulate order data
        $orders = array(
          array("order_id" => 1, "customer_name" => "John Doe", "table_number" => 1, "order_items" => "Burger, Fries, Drink", "total_price" => 15.99, "status" => "Pending"),
          array("order_id" => 2, "customer_name" => "Jane Smith", "table_number" => 2, "order_items" => "Pizza, Salad", "total_price" => 12.99, "status" => "Completed"),
          array("order_id" => 3, "customer_name" => "Peter Jones", "table_number" => 3, "order_items" => "Pasta, Soup", "total_price" => 10.99, "status" => "In Progress"),
        );

        foreach ($orders as $order) {
          echo "<tr>";
          echo "<td>" . $order["order_id"] . "</td>";
          echo "<td>" . $order["customer_name"] . "</td>";
          echo "<td>" . $order["table_number"] . "</td>";
          echo "<td>" . $order["order_items"] . "</td>";
          echo "<td>" . $order["total_price"] . "</td>";
          echo "<td>" . $order["status"] . "</td>";
          echo "<td><button class='button'>View</button></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Table Management Section -->
  <div id="tableSection">
    <h2>Table Management</h2>
    <table>
      <thead>
        <tr>
          <th>Table Number</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Simulate table data
        $tables = array(
          array("table_number" => 1, "status" => "Occupied"),
          array("table_number" => 2, "status" => "Available"),
          array("table_number" => 3, "status" => "Occupied"),
        );

        foreach ($tables as $table) {
          echo "<tr>";
          echo "<td>" . $table["table_number"] . "</td>";
          echo "<td>" . $table["status"] . "</td>";
          echo "<td><button class='button'>View</button></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Take Order Section -->
  <div id="takeOrderSection">
    <h2>Take Order</h2>
    <form action="submit_order.php" method="post">
      <label for="customerName">Customer Name:</label>
      <input type="text" id="customerName" name="customerName" required>
      
      <label for="tableNumber">Table Number:</label>
      <select id="tableNumber" name="tableNumber" required>
        <option value="">Select Table</option>
        <?php
        // Simulate table options
        foreach ($tables as $table) {
          echo "<option value='" . $table["table_number"] . "'>" . $table["table_number"] . "</option>";
        }
        ?>
      </select>
      

      <!--order items-->
      <form id="orderForm">
        <label for="orderItems">Order Items:</label>
        <select id="orderItems" name="orderItems" required>
            <option value="" disabled selected>Select an item</option>
            <option value="1" data-price="10.00">Item 1 - $10.00</option>
            <option value="2" data-price="15.00">Item 2 - $15.00</option>
            <option value="3" data-price="20.00">Item 3 - $20.00</option>
            <!-- Add more items as needed -->
        </select>

        <div class="quantity-panel">
            <button type="button" id="decreaseQty">-</button>
            <input type="number" id="quantity" name="quantity" value="1" min="1" readonly>
            <button type="button" id="increaseQty">+</button>
        </div>

        <label for="totalPrice">Total Price:</label>
        <input type="number" id="totalPrice" name="totalPrice" step="0.01" value="0.00" readonly>

        <button type="submit" style="background-color: #003300; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Submit Order</button>

        <!--<button type="submit">Submit Order</button>-->
    </form>
  </div>

</div>

<script>
// Function to toggle visibility of sections
function showSection(sectionId) {
  document.getElementById('orderSection').style.display = 'none';
  document.getElementById('tableSection').style.display = 'none';
  document.getElementById('takeOrderSection').style.display = 'none';
  
  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}

//order items and update
const orderItems = document.getElementById('orderItems');
        const totalPrice = document.getElementById('totalPrice');
        const quantity = document.getElementById('quantity');
        const increaseQty = document.getElementById('increaseQty');
        const decreaseQty = document.getElementById('decreaseQty');

        function updateTotalPrice() {
            const selectedItem = orderItems.options[orderItems.selectedIndex];
            const itemPrice = parseFloat(selectedItem.getAttribute('data-price'));
            const qty = parseInt(quantity.value);
            totalPrice.value = (itemPrice * qty).toFixed(2);
        }

        orderItems.addEventListener('change', updateTotalPrice);
        quantity.addEventListener('input', updateTotalPrice);

        increaseQty.addEventListener('click', () => {
            quantity.value = parseInt(quantity.value) + 1;
            updateTotalPrice();
        });

        decreaseQty.addEventListener('click', () => {
            if (parseInt(quantity.value) > 1) {
                quantity.value = parseInt(quantity.value) - 1;
                updateTotalPrice();
            }
        });
</script>

</body>
</html>
