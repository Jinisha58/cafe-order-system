
<?php include('dashboard.php'); ?>
<!-- Main Content -->
<div class="main-content">
    <section id="tables" class="hidden">
        <h2>Manage Tables</h2>
        <table>
            <thead>
                <tr>
                    <th>Table Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td id="status-1">Occupied</td>
                    <td>
                        <button onclick="editTable(1)">Edit Table</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td id="status-2">Available</td>
                    <td>
                        <button onclick="editTable(2)">Edit Table</button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td id="status-3">Available</td>
                    <td>
                        <button onclick="editTable(3)">Edit Table</button>
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td id="status-4">Available</td>
                    <td>
                        <button onclick="editTable(4)">Edit Table</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>



        <!-- for menu section -->
        <section id="menu" class="hidden">
            <h2>Menu Items</h2>

            <a href="add_menu.php">
            <button onclick="addMenuItem()">Add Menu Item</button>
            </a>
            <?php include('manage-food.php'); ?>
            <!--<table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coffee</td>
                        <td>$2.50</td>
                        <td>
                            <button onclick="editItem('Coffee')">Edit</button>
                            <button onclick="deleteItem('Coffee')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sandwich</td>
                        <td>$5.00</td>
                        <td>
                            <button onclick="editItem('Sandwich')">Edit</button>
                            <button onclick="deleteItem('Sandwich')">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>-->

            
        </section>

        <!-- for customer section -->
        <section id="customers" class="hidden">
    <h2>Customer Information</h2>
    <table>
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th> <!-- Add action to show orders -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td><button onclick="toggleOrders(1)">View Orders</button></td>
            </tr>
        </tbody>
    </table>

    <!-- Order details section for the customer -->
    <div id="orders-1" class="hidden">
        <h3>Orders for John Doe</h3>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Table Number</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Coffee</td>
                    <td>2</td>
                    <td>$5.00</td>
                    <td>1</td>
                    <td id="statuS-1">Pending</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Sandwich</td>
                    <td>1</td>
                    <td>$5.00</td>
                    <td>2</td>
                    <td id="statuS-2">In progress</td>
                </tr>

            <tr>
                    <td>3</td>
                    <td>Sandwich</td>
                    <td>1</td>
                    <td>$5.00</td>
                    <td>3</td>
                    <td id="statuS-3">Completed</td>
            </tr>
            </tbody>
        </table>
        </div>


<!-- Cashier Section -->
<section id="cashiers" class="hidden">
    <h2>Cashier Information</h2>
    <table>
        <thead>
            <tr>
                <th>Cashier ID</th>
                <th>Name</th>
                <th>Shift</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Alice Johnson</td>
                <td>Morning</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bob Smith</td>
                <td>Evening</td>
            </tr>
        </tbody>
    </table>
</section>


</body>
</html>
