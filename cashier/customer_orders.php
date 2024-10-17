<?php
include '../conn/connection.php'; // Database connection

// Fetch all orders with their items
$sql = "
    SELECT 
        o.order_id AS order_id, o.customer_name, t.table_num, 
        o.total_price, o.order_date, o.status, 
        GROUP_CONCAT(m.item_name SEPARATOR ', ') AS items 
    FROM orderss o  -- Ensure the table name is correct
    JOIN tables t ON o.table_id = t.table_id
    JOIN order_items oi ON o.order_id = oi.order_id
    JOIN menu m ON oi.item_id = m.item_id
    GROUP BY o.order_id";

$result = $conn->query($sql);

if (!$result) {
    die("Query Failed: " . $conn->error);  // Error handling for debugging
}

// Initialize alert messages
$alertMessage = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
$alertType = isset($_GET['alert']) ? htmlspecialchars($_GET['alert']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Customer Orders</h2>

    <!-- Alert Message (Success or Error) -->
    <?php if ($alertMessage): ?>
        <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert">
            <?php echo $alertMessage; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Table Number</th>
                    <th>Items</th>
                    <th>Total Price</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['table_num']; ?></td>
                        <td><?php echo $row['items']; ?></td>
                        <td>$<?php echo number_format($row['total_price'], 2); ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                        <td>
                            <span class="badge 
                                <?php 
                                    if ($row['status'] == 'Pending') echo 'badge-warning';
                                    elseif ($row['status'] == 'In Progress') echo 'badge-primary';
                                    elseif ($row['status'] == 'Completed') echo 'badge-success';
                                ?>">
                                <?php echo $row['status']; ?>
                            </span>
                        </td>
                        <td>
                            <!-- Edit Button -->
                            <button class="btn btn-info" data-toggle="modal" data-target="#editModal<?php echo $row['order_id']; ?>">Edit</button>
                            <!-- Delete Button -->
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $row['order_id']; ?>">Delete</button>
                        </td>
                    </tr>

                    <!-- Modal for Editing Status -->
                    <div class="modal fade" id="editModal<?php echo $row['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $row['order_id']; ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel<?php echo $row['order_id']; ?>">Edit Order Status</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="update_order_status.php">
                                    <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                                    <div class="form-group">
                                        <label for="status">Select New Status:</label>
                                        <select name="status" class="form-control" required>
                                            <option value="Pending" <?php if ($row['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                                            <option value="In Progress" <?php if ($row['status'] == 'In Progress') echo 'selected'; ?>>In Progress</option>
                                            <option value="Completed" <?php if ($row['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
                                        </select>       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="update_status" class="btn btn-primary">Update Status</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Deleting Order -->
                    <div class="modal fade" id="deleteModal<?php echo $row['order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo $row['order_id']; ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel<?php echo $row['order_id']; ?>">Delete Order</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="delete_order.php">
                                    <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this order?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="delete_order" class="btn btn-danger">Delete Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No orders found.</p>
    <?php endif; ?>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
