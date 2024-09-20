<h2 class="text-center text-white">Fill this form to confirm your order.</h2>

<form action="submit_order.php" method="post" class="order">
    <fieldset>
        <legend>Selected Drink</legend>

        <div class="drink-menu-img">
            <img src="images/menu-iced.jpg" alt="iced coffee" class="img-responsive img-curve">
        </div>

        <div class="drink-menu-desc">
            <h3>Food Title</h3>
            <p class="drink-price">$2.3</p>

            <div class="order-label">Quantity</div>
            <input type="number" name="drink_qty" class="input-responsive" value="1" required>
        </div>
    </fieldset>

    <h2>Take Order</h2>
    
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
</form>
















<!-- Conditional Login/Signup or Username/Logout -->
<ul class="navbar-nav">
    <?php 
    session_start();
    if (isset($_SESSION['username'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="#">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../process/logout.php">Logout</a>
        </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
    <?php endif; ?>
</ul>

<style>
    .navbar-nav {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .navbar-nav .nav-item {
        margin-right: 15px; /* Adjust spacing between items */
    }

    .navbar-nav .nav-link {
        text-decoration: none;
        color: #000; /* Adjust text color as needed */
    }
</style>
