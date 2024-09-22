
<?php include('dashboard.php'); ?>
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

</body>
</html>
