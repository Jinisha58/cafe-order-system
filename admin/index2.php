<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Order System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 25px 20px;
            text-align: center;
        }

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


        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #f4f4f4;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            display: block;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        button {
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <span>Welcome, <strong>Admin</strong></span>
        <a href="../process/logout.php">
        <button class="logout-btn">Logout</button>
           </a>
        <!--<button class='logout-btn' onclick="window.location.href='logout.php'">Logout</button>-->

    </div>

<!--Sidebar -->
    <div class="sidebar">
    <h4><a href="#">Dashboard</a></h4>
    <ul>
        <li><a href="#tables" onclick="toggleSection('tables')">Tables</a></li>
        <li><a href="#menu" onclick="toggleSection('menu')">Menu</a></li>
        <li><a href="#customers" onclick="toggleSection('customers')">Customers</a></li>
        <li><a href="#cashiers" onclick="toggleSection('cashiers')">Cashiers</a></li>
    </ul>
</div>

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

            <button onclick="addMenuItem()">Add Menu Item</button>
            <table>
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
            </table>

            
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Coffee</td>
                    <td>2</td>
                    <td>$5.00</td>
                    <td>1</td>
                    <td id="statuS-1">Occupied</td>
                    <td>
                        <button onclick="editTable(1)">Edit Table</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sandwich</td>
                    <td>1</td>
                    <td>$5.00</td>
                    <td>2</td>
                    <td id="statuS-2">Available</td>
                    <td>
                        <button onclick="editTable(2)">Edit Table</button>
                    </td>

                </tr>
            </tbody>
        </table>

        <!-- for cashier section -->
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
    </div>

    <script>
        function toggleSection(sectionId) {
        const sections = ['tables', 'menu', 'customers', 'cashiers'];
        sections.forEach(id => {
            const section = document.getElementById(id);
            section.classList.toggle('hidden', id !== sectionId);
        });
    }

    function editTable(tableNumber) {
        const statusCell = document.getElementById(`status-${tableNumber}`);
        const currentStatus = statusCell.textContent;
        const newStatus = currentStatus === 'Occupied' ? 'Available' : 'Occupied';
        statusCell.textContent = newStatus;
        alert(`Table ${tableNumber} status changed to: ${newStatus}`);
    }

    function editTable(tableNumber) {
        // Get the status cell by ID
        const statusCell = document.getElementById(`statuS-${tableNumber}`);
        
        // Get the current status
        const currentStatus = statusCell.textContent.trim();
        
        // Toggle the status
        const newStatus = currentStatus === 'Occupied' ? 'Available' : 'Occupied';
        
        // Update the status cell with the new status
        statusCell.textContent = newStatus;
        
        // Optionally show an alert with the new status
        alert(`Table ${tableNumber} status changed to: ${newStatus}`);
    }


    //function viewTable(tableNumber) {
      //  alert("Viewing table number: " + tableNumber);
        // Here, you can add more details about the table if needed
    //}
        function editItem(itemName) {
            alert("Editing item: " + itemName);
        }

        function deleteItem(itemName) {
            alert("Deleting item: " + itemName);
        }

        function addMenuItem() {
        // Implement functionality for adding a new menu item here
        alert('Add Menu Item functionality goes here.');
    }
        function toggleOrders(customerId) {
        const ordersSection = document.getElementById('orders-' + customerId);
        ordersSection.classList.toggle('hidden');
    }
    </script>
</body>
</html>
