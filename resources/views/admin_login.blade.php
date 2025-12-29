<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #2e86de, #74b9ff);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px 30px;
            width: 350px;
            text-align: center;
            animation: slideDown 0.7s ease;
        }

        .login-container h2 {
            color: #ffffff;
            font-size: 2em;
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            font-weight: bold;
        }

        .login-container label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            font-size: 1em;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            background: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            outline: none;
        }

        .login-container button {
            width: 100%;
            background: linear-gradient(135deg, #0984e3, #74b9ff);
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .login-container button:hover {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            transform: translateY(-3px);
        }

        .login-container button:active {
            transform: translateY(0);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form method="POST" action="{{ url('/admin_login') }}">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
