<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Font style for the page */
            background-color: #f4f4f4; /* Light background color */
            padding: 20px; /* Padding around the content */
        }

        .button-container {
            margin-bottom: 20px;
        }

        .button {
            padding: 12px 24px;
            background: linear-gradient(90deg, #007bff, #0056b3); /* Gradient background */
            color: white; /* Text color */
            text-decoration: none;
            border-radius: 5px; /* Rounded corners */
            transition: background 0.3s, transform 0.3s; /* Smooth transition */
            margin-right: 10px; /* Space between buttons */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            font-size: 16px; /* Font size */
        }

        .button:hover {
            background: linear-gradient(90deg, #0056b3, #004494); /* Darker gradient on hover */
            transform: translateY(-2px); /* Slight lift effect */
        }

        .button:active {
            transform: translateY(0); /* Reset lift effect when clicked */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Reduced shadow when clicked */
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="add_subcategory.php" class="button">Add Subcategory</a>
        <a href="add_menu.php" class="button">Add Menu Item</a>
    </div>

   
</body>
</html>
