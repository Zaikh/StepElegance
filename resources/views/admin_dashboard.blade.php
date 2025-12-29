<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: /admin_login");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            width: 100%;
            animation: fadeIn 1s ease-in;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #444;
            margin: 20px 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #4a73e8;
            outline: none;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4a73e8;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2a58d0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4a73e8;
            color: white;
        }


.btn-edit {
    padding: 7px 15px;
    background-color: #28a745; 
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-edit:hover {
    background-color: #218838; 
}


.btn-delete {
    padding: 7px 15px;
    background-color: #dc3545; 
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-delete:hover {
    background-color: #c82333; 
}

        .btn-action {
    padding: 10px 20px;
    background-color: #4a73e8;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    margin: 10px;
    transition: background-color 0.3s ease;
}

.btn-action:hover {
    background-color: #2a58d0;
}

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <h2>Add New Product</h2>
        
        <form method="POST" action="">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="product_price">Product Price:</label>
            <input type="number" id="product_price" name="product_price" step="0.01" required>

            <label for="product_image">Image URL:</label>
            <input type="text" id="product_image" name="product_image" required>

            <button type="submit" name="add_product">Add Product</button>
        </form>

        <h2>Existing Products</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </table>

        <div style="text-align: center; margin-top: 20px;">
          <a href="{{'/index'}}" class="btn-action">Logout</a>
          <a href="{{'/temp'}}" class="btn-action">Show all orders</a>
        </div>

    </div>
</body>
</html>
