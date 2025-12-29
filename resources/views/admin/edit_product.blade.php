<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
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
        <h1>Edit Product</h1>
        
        <form method="POST" action="{{ route('admin.updateProduct', $product->id) }}">
            @csrf

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="{{ $product->name }}" required>

            <label for="product_price">Product Price:</label>
            <input type="number" id="product_price" name="product_price" value="{{ $product->price }}" step="0.01" required>

            <label for="product_image">Product Image URL:</label>
            <input type="text" id="product_image" name="product_image" value="{{ $product->image }}" required>

            <button type="submit">Update Product</button>
        </form>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('admin.dashboard') }}" class="btn-action">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>