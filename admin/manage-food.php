
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Display</title>
    <style>
/* General styling for the menu display */
    /* General styling for the menu display 
.menu-display {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 20px;
}

h2 {
    color: #2c3e50;
    font-size: 28px;
    border-bottom: 3px solid #3498db;
    padding-bottom: 5px;
    margin-top: 40px;
    margin-bottom: 10px;
}

h3 {
    color: #34495e;
    font-size: 22px;
    margin-top: 20px;
    margin-bottom: 10px;
}

img {
    display: block;
    margin-bottom: 10px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 120px;
}

/* Styling for the table 
table {
    width: 100% 70%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #f7f9f9;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #2980b9;
    color: white;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #bdc3c7;
}

th {
    font-size: 18px;
}

td {
    font-size: 16px;
}

/* Adjust column widths 
td:first-child {
    width: 70%; /* First column (Item Name) takes 70% 
}

td:last-child {
    width: 30%; /* Second column (Price) takes 30% 
    text-align: right; /* Align the price to the right 
}

tr:nth-child(even) {
    background-color: #ecf0f1;
}

/* Add hover effect for table rows 
tr:hover {
    background-color: #3498db;
    color: #fff;
}

/* Responsive design adjustments 
@media (max-width: 768px) {
    h2 {
        font-size: 24px;
    }
    
    h3 {
        font-size: 18px;
    }
    
    th, td {
        font-size: 14px;
        padding: 8px;
    }

    img {
        width: 80px;
    }

    td:first-child {
        width: 60%;  Reduce further for smaller screens 
    }
    
    td:last-child {
        width: 40%;
    }
}*/

    </style>
</head>
<body>
<?php
include '../conn/connection.php'; // Include your connection file

// Fetch categories, subcategories, and menu items
$sql = "
    SELECT c.id AS category_id, c.category_name, 
           sc.id AS subcategory_id, sc.subcategory_name, sc.image,
           m.menu_id AS menu_id, m.item_name, m.price
    FROM category c
    LEFT JOIN sub_category sc ON c.id = sc.category_id
    LEFT JOIN menu m ON sc.id = m.subcategory_id
    ORDER BY c.category_name, sc.subcategory_name, m.item_name
";

$result = $conn->query($sql);

$current_category = '';
$current_subcategory = '';

if ($result->num_rows > 0) {
    echo '<div class="menu-display">';
    
    while ($row = $result->fetch_assoc()) {
        // Display category header
        if ($current_category != $row['category_name']) {
            if ($current_category != '') {
                echo '</tbody></table>'; // Close previous table if category changes
            }
            $current_category = $row['category_name'];
            echo "<h2>{$current_category}</h2>";
        }

        if ($current_subcategory != $row['subcategory_name']) {
            if ($current_subcategory != '') {
                echo '</tbody></table>'; // Close previous table if subcategory changes
            }
            $current_subcategory = $row['subcategory_name'];
            $imagePath = !empty($row['image']) ? "uploads/{$row['image']}" : 'default_image.jpg'; // Update image path
            echo "<h3>{$current_subcategory}</h3>";
            echo "<img src='{$imagePath}' alt='{$current_subcategory} image' style='width:100px;height:auto;'>"; // Display image
            echo '<table border="1">';
            echo '<thead><tr><th>Item Name</th><th>Price</th></tr></thead>';
            echo '<tbody>';
        }
        // Display menu item
        if (!is_null($row['menu_id'])) {
            echo "<tr><td>{$row['item_name']}</td><td>{$row['price']}</td></tr>";
        }
    }

    echo '</tbody></table>'; // Close the last table
    echo '</div>';
} else {
    echo "No items found.";
}

$conn->close();
?>
</body>
</html>

