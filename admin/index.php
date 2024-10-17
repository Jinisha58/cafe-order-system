<!-- index.php -->
<div class="section" id="tables" style="display: none;">
    <?php include('admin_tables.php'); ?> <!-- Include the table management content here -->
</div>

<div class="section" id="menu" style="display: none;">
    <h2>Manage Menu</h2>
    <a href="add_menu.php">
        <button onclick="addMenuItem()">Add Menu Item</button>
    </a>
    <?php include('manage-menu.php'); ?> <!-- Include the menu management content here -->
</div>

<div class="section" id="customers" style="display: none;">
    <h2>Manage Customers</h2>
    <p>Here you can view and manage your customers.</p>
    <!-- Add customer management content here -->
</div>


<div class="section" id="cashiers" style="display: none;">
    <!-- Add cashier management content here -->
     <!-- Cashier Registration Section -->
<h2>Register Cashier</h2>

<form method="POST" action="register_cashier.php"> <!-- Change action to point to the register file -->
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

<!-- Include the cashier list -->
<?php include 'display_cashier.php'; ?>

</div>
